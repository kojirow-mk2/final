<?php
require '/db-connect.php'; // データベースへの接続設定

// GETパラメータからIDを取得
$id = $_GET["id"];

// データベースからデータを削除
$sql = "DELETE FROM Game WHERE id=:id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

// 一覧ページにリダイレクト
header("Location: list.php");
?>
