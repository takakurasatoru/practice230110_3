# Webpackテンプレート Version1

## テンプレートについて<br>
※node.jsが環境にないと動作しません。<br>
ーーーーーーーーーーーーーーー<br>
node -v<br>
v16.14.2

npm -v<br>
8.5.0

npx webpack -v<br>
webpack: 5.72.0<br>
webpack-cli: 4.9.2
<br>ーーーーーーーーーーーーーーー<br>

### 使用方法<br>

パッケージのインストール
```bash=
npm ci
```
バージョン確認
```bash=
npx webpack -v
```
ヘルプを表示
```bash=
npx webpack -h
```
実行
```bash=
npx webpack
```
watch
```bash=
npx webpack watch
```

終了
`control + c`


ディレクトリ階層（任意の階層へ変更可）

Directory Name(ディレクトリ名)<br>
├── node_modules        //node modules<br>
├── package.json        //json file<br>
├── webpack.config.js   //webpack config<br>
└─- public_html         //contents<br>
    ├── assets<br>
        ├── img         //圧縮済みの画像の出力先<br>
        ├── css         //コンパイル後のcssファイルの出力先<br>
        └── js          //トランスパイル後のjsファイルの出力先<br>
    ├── src<br>
        ├── img-max     //圧縮前の画像ファイル格納場所<br>
        ├── js          //トランスパイル前のtsファイル格納場所<br>
        └── scss        //コンパイル前のscssファイル格納場所<br>
    └── index.html
