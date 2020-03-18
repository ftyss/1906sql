<?php

    $user='root';
    $pass='root';
    $dbh = new PDO('mysql:host=192.168.203.1;dbname=shop', $user, $pass);

    //准备sql语句
    $sql="insert into nav(navname,navimage) values('111','image')";

    //执行sql语句
    $res =$dbh->exec($sql);
    //$res =$dbh->query($sql);
    var_dump($res);