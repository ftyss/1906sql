<?php

    //连接数据库
    $mysqli = new mysqli("192.168.203.1", "root", "root", "shop");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo "连接成功";echo '<br>';

    echo "未经处理的参数：".$_GET['name'];echo '<br>';
    $name=$_GET['name'];
    echo "经过处理接到的参数：".$name;echo '<br>';

    //sql语句
    $sql="select * from nav where navname='{$name}'";
    echo "sql语句： ".$sql;echo '<br>';

    //执行sql语句
    $res=$mysqli->query($sql);
    echo '<hr>';

    //遍历数据
    while($row=$res->fetch_assoc())
    {
        echo '<pre>';print_r($row);echo '</pre>';
    }
