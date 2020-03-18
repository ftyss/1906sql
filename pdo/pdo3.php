<?php
/**
 * pdo 预处理
 */
    $user='root';
    $pass='root';
    $dbh = new PDO('mysql:host=192.168.203.1;dbname=shop', $user, $pass);

    //准备sql语句
    $id=$_GET['id'];
    echo "未处理的参数：".$_GET['id'];echo '<br>';

    //预处理
    $stmt=$dbh->prepare("select * from nav where navid=?");
    $stmt->bindParam(1,$id);        //绑定参数
    $stmt->execute();       //执行sql语句

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        echo '<pre>';print_r($row);echo '</pre>';
        echo '<hr>';
    }