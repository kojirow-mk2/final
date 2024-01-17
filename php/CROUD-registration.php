<!-- registration.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ゲーム登録</title>
</head>
<body>

<h2>ゲーム登録</h2>

<?php
include 'db-connect.php';

// フォームが送信された場合の処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータの取得
    $name = $_POST["name"];
    $category = $_POST["category"];

    try {
        // データベースへの登録クエリの実行
        $query = "INSERT INTO Game (name, category) VALUES (:name, :category)";
        $statement = $connect->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':category', $category);

        if ($statement->execute()) {
            echo "ゲームが登録されました。";
        } else {
            echo "エラー: データベースへの登録に失敗しました。";
        }
    } catch (PDOException $e) {
        echo "エラー: " . $e->getMessage();
    }
}

?>

<form action="registration.php" method="post">
    <label for="name">ゲーム名:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="category">カテゴリー:</label>
    <input type="text" id="category" name="category" required><br>

    <button type="submit">登録</button>
</form>

</body>
</html>
