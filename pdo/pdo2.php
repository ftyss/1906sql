<?php
    $user='root';
    $pass='root';
    $dbh = new PDO('mysql:host=192.168.203.1;dbname=shop', $user, $pass);

    //准备sql语句
    $id=$_GET['id'];
    echo "未处理的参数：".$id;echo '<br>';

    $id=intval($_GET['id']);
    echo "处理过的参数：".$id;echo '<br>';
    $sql="select * from nav where navid={$id}";

    //执行sql语句
    $res=$dbh->query($sql);

    while($row=$res->fetch(PDO::FETCH_ASSOC))
    {
        echo '<pre>';print_r($row);echo '</pre>';
        echo '<hr>';
    }