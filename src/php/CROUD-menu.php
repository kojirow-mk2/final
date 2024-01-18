<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    switch ($action) {
        case "list":
            header("Location: CROUD-list.php"); // 一覧ページへリダイレクト
            break;
        case "add":
            header("Location: CROUD-add-input.php"); // 登録ページへリダイレクト
            break;
        case "update":
            header("Location: CROUD-update-input.php"); // 更新ページへリダイレクト
            break;
        case "delete":
            header("Location: CROUD-delete.php"); // 削除ページへリダイレクト
            break;
        default:
            // エラー処理など
            break;
    }
}
?>