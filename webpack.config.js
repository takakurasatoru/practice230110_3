const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');
const CopyPlugin = require('copy-webpack-plugin');
const MODE = "development";
// const enabledSourceMap = true;

module.exports = {
  mode: MODE,
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  devtool: 'source-map',
  // エントリーポイントの設定
  entry: {
    // コンパイル対象のファイルを指定
    'bundle': path.resolve(__dirname, "./public_html/src/js/bundle.ts"),
    'style.css': path.resolve(__dirname, './public_html/src/scss/style.scss'),
  },
  // 出力設定
  output: {
    path: path.resolve(__dirname, './public_html/assets/'), // 出力先フォルダを絶対パスで指定
    filename: 'js/[name].js' // [name]にはentry:で指定したキーが入る
  },

  //js圧縮
  optimization: {
    minimize: true
  },
  module: {
    rules: [
      // jsトランスパイル
      {
        // Babel
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              presets: [
                '@babel/preset-env',
              ]
            }
          }
        ]
      },

      // sassのコンパイル設定
      {
        test: /\.(sa|sc|c)ss$/, // 対象にするファイルを指定
        use: [
          MiniCssExtractPlugin.loader, // JSとCSSを別々に出力する
          {
            loader: 'css-loader',
            options: {
              import: false,
              url: false, //URL の解決を無効に
              sourceMap: true,
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  require('autoprefixer')({ // 自動でベンダープレフィックスを付与
                    grid: true,
                    "overrideBrowserslist": [ // 対象ブラウザの設定
                      "last 2 versions",
                      "ie >= 11",
                      "Android >= 4"
                    ]
                  })
                ]
              },
            }
          },
          {
            loader: 'sass-loader',
            options: {
              implementation: require('sass'),
              sourceMap: true,
              sassOptions: {
								outputStyle: 'compressed',
							},
            }
          },
        ]
      },
    ]
  },

  plugins: [
    new FixStyleOnlyEntriesPlugin(), // CSS別出力時の不要JSファイルを削除
    new MiniCssExtractPlugin({ // CSSの出力先
      filename: 'css/[name]'// 出力ファイル名を相対パスで指定（[name]にはentry:で指定したキーが入る）
    }),
  ],
  // node_modules を監視（watch）対象から除外
  watchOptions: {
    ignored: /node_modules/
  }
};
