<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php
    echo '<table>';
    echo '<tr><th>ID</th><th>ゲーム名</th><th>カテゴリー</th></tr>';
    $pdo = new PDO ($connect,USER,PASS);
    foreach ($pdo->query('select * from Game') as $row) {
        echo '<tr>';
        echo '<td>',$row['id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['category'],'</td>';
        echo '</tr>';
        echo "\n";
    }
    echo '</table>';

    echo '<a href="../html/index.html">メニューに戻る</a>';
?>