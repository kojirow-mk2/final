<?php
require '/db-connect.php'; // データベースへの接続設定

// POSTデータの処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $category = $_POST["category"];

    // データベースのデータを更新
    $sql = "UPDATE Game SET name=:name, category=:category WHERE id=:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->execute();
}

// 一覧ページにリダイレクト
header("Location: list.php");
?>
