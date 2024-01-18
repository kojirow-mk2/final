<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php
    $pdo = new PDO ($connect, USER, PASS);
    $sql = $pdo->prepare('INSERT INTO Game VALUES (null, ?, ?)');
    if ($sql->execute([$_REQUEST['name'], $_REQUEST['category']])) {
        echo '<p>追加に成功しました！</p>';
        echo '<a href="../html/index.html">メニューに戻る</a>';
    } else {
        echo '追加に失敗しました！';
        echo '<script>alert("追加に失敗しました！"); window.history.back();</script>';
    }
?>
