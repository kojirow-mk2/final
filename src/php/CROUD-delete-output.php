<?php require 'db-connect.php'; ?>
<?php
    $pdo = new PDO ($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Game where id=?');
    if($sql->execute([$_REQUEST['id']])){
        echo '削除に成功しました！';
        echo '<p><a href="../html/index.html">メニューに戻る</a></P>';
    }else{
        echo '削除に失敗しました！';
        echo '<script>alert("削除に失敗しました！"); window.history.back();</script>';
    }
?>