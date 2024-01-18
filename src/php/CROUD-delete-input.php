<?php require 'db-connect.php'; ?>
<table>
    <tr><th>ID</th><th>ゲーム名</th><th>カテゴリー</th><th></th></tr>
<?php
    $pdo = new PDO ($connect, USER, PASS);
    foreach ($pdo->query('select * from Game') as $row) {
        echo '<tr>';
        echo '<td>',$row['id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['category'],'</td>';
        echo '<td>';
        echo '<a href="CROUD-delete-output.php?id=',$row['id'],'">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
        echo '<a href="../html/index.html">メニューに戻る</a>';
?>
</table>