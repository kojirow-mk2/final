<?php require 'db-connect.php'; ?>
<div class="th0">ID</div>
<div class="th1">ゲーム名</div>
<div class="th1">カテゴリー</div>
<?php
$pdo = new PDO($connect, USER, PASS);
foreach ($pdo->query('select * from Game') as $row) {
    echo '<form action="CROUD-update-output.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['id'], '">';
    echo '<div class="td0">', $row['id'], '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="', $row['name'], '">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="category" value="', $row['category'], '">';
    echo '</div>';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
