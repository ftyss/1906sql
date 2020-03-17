<?php

    //连接数据库
    $mysqli = new mysqli("192.168.203.1", "root", "root", "shop");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '<br>';

    $uid=$_GET['uid'];
    echo "未经处理的参数：".$uid;echo '<br>';
    $uid2=intval($uid);
    echo "经过处理接到的参数：".$uid2;echo '<br>';

    //sql语句
    $sql="select * from nav where navid=".$uid2;
    echo "sql语句： ".$sql;echo '<br>';

    //执行sql语句
    $res=$mysqli->query($sql);
    echo '<hr>';

    //遍历数据
    while($row=$res->fetch_assoc())
    {
        echo '<pre>';print_r($row);echo '</pre>';
    }
