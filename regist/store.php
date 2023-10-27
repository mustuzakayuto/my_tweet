<?php
// セッションスタート
session_start();
session_regenerate_id(true);

//セッションからデータ取得
$regist = $_SESSION['regist'];

//TODO: データチェック
//TODO: データベースに保存
// $sql = "INSERT INTO (name,email,....) VALUES ($name,$email,$password)"
// セッション削除
$isSuccess = false;
unset($_SESSION['regist']);

if ($isSuccess){
//結果画面にリダイレクト
    header('Location: result.php');
} else {
    header('Location: input.php');
}