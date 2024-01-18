<?php require 'db-connect.php'; ?>
<?php
    $pdo = new PDO ($connect, USER, PASS);
    $sql=$pdo->prepare('update Game set name=?,category=? where id=?');
    if(empty($_REQUEST['name'])){
        echo 'ゲーム名を入力してください';
    }else if(empty($_REQUEST['category'])){
        echo 'カテゴリー名を入力してください';
    }else if($sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST['category'],$_REQUEST['id']])){
        echo '更新に成功しました！';
        echo '<a href="../html/index.html">メニューに戻る</a>';
    }else{
        echo '更新に失敗しました。';
        echo '<script>alert("更新に失敗しました！"); window.history.back();</script>';
    }
?>