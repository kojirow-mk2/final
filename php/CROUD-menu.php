<!-- CROUD-menu.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ゲーム情報管理</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["list"])) {
        // 一覧ページにリダイレクト
        header("Location: CROUD-list.php");
        exit();
    } elseif (isset($_POST["registration"])) {
        // 登録ページにリダイレクト
        header("Location: CROUD-registration.php");
        exit();
    } elseif (isset($_POST["update"])) {
        // 更新ページにリダイレクト
        header("Location: CROUD-update.php");
        exit();
    } elseif (isset($_POST["delete"])) {
        // 削除ページにリダイレクト
        header("Location: CROUD-delete.php");
        exit();
    } else {
        // エラーまたは未知のリクエストの場合
        echo "無効なリクエストです。";
    }
}

?>

</body>
</html>
