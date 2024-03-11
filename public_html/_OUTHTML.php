<?php

$files = glob('./*/*.php');
$length = count($files);
$link_before1 = "./index.php";
$link_after1  = "./index.html";
$link_before2 = "./type_A.php";
$link_after2  = "./type_A.html";
$link_before3 = "./type_E.php";
$link_after3  = "./type_E.html";
$link_before4 = "./type_G.php";
$link_after4  = "./type_G.html";

for ($i = 0; $i < $length; $i++) {
  $fileList[] = substr($files[$i], 2, -4);
}
var_dump($fileList);
echo "<br><br>";

for ($i = 1; $i < $length; $i++) {

  //コンテンツ取得先
  $url = "http://localhost/leben_matsuyama/" . $fileList[$i] . ".php";

  //コンテンツ取得
  if ($data = @file_get_contents($url)) {
    echo "__" . $i . "__ " . $url . "<br>";
    $buff = $data;

    for ($j = 1; $j <= 4; $j++) {
      $buff = str_replace(${"link_before" . $j}, ${"link_after" . $j}, $buff);
    }

    $fname = $fileList[$i] . ".html";
    $fhandle = fopen($fname, "w");
    fwrite($fhandle, $buff);
    fclose($fhandle);
    if ($i == ($length - 1)) {
      echo "end...<br><br><br>";
    }
  } else {
    //エラー処理
    if (count($http_response_header) > 0) {
      //「$http_response_header[0]」にはステータスコードがセットされている
      $status_code = explode(' ', $http_response_header[0]);  //「$status_code[1]」にステータスコードの数字だけが入る
      //エラーの判別
      switch ($status_code[1]) {
          //404エラーの場合
        case 404:
          echo "指定したページが見つかりませんでした";
          break;
          //500エラーの場合
        case 500:
          echo "指定したページがあるサーバーにエラーがあります";
          break;
          //その他のエラーの場合
        default:
          echo "何らかのエラーによって指定したページのデータを取得できませんでした";
      }
    } else {
      //タイムアウトの場合 or 存在しないドメインだった場合
      echo "タイムエラー or URLが間違っています";
    }
  }
  //「$http_response_header」の初期化
  $http_response_header = array();
  sleep(1);
}


$files2 = glob('./*.php');
$length2 = count($files2);

for ($i = 0; $i < $length2; $i++) {
  $fileList2[] = substr($files2[$i], 2, -4);
}
var_dump($fileList2);
echo "<br><br>";

for ($i = 1; $i < $length2; $i++) {

  //コンテンツ取得先
  $url = "http://localhost/leben_matsuyama/" . $fileList2[$i] . ".php";

  //コンテンツ取得
  if ($data = @file_get_contents($url)) {
    echo "__" . $i . "__ " . $url . "<br>";
    $buff = $data;

    for ($j = 1; $j <= 4; $j++) {
      $buff = str_replace(${"link_before" . $j}, ${"link_after" . $j}, $buff);
    }

    $fname = $fileList2[$i] . ".html";
    $fhandle = fopen($fname, "w");
    fwrite($fhandle, $buff);
    fclose($fhandle);
    if ($i == ($length2 - 1)) {
      echo "end...<br><br><br>";
    }
  } else {
    //エラー処理
    if (count($http_response_header) > 0) {
      //「$http_response_header[0]」にはステータスコードがセットされている
      $status_code = explode(' ', $http_response_header[0]);  //「$status_code[1]」にステータスコードの数字だけが入る
      //エラーの判別
      switch ($status_code[1]) {
          //404エラーの場合
        case 404:
          echo "指定したページが見つかりませんでした";
          break;
          //500エラーの場合
        case 500:
          echo "指定したページがあるサーバーにエラーがあります";
          break;
          //その他のエラーの場合
        default:
          echo "何らかのエラーによって指定したページのデータを取得できませんでした";
      }
    } else {
      //タイムアウトの場合 or 存在しないドメインだった場合
      echo "タイムエラー or URLが間違っています";
    }
  }
  //「$http_response_header」の初期化
  $http_response_header = array();
  sleep(1);
}

?>
