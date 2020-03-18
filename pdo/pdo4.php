<?php
/**
 * pdo 预处理
 */
    $user='root';
    $pass='root';
    $dbh = new PDO('mysql:host=192.168.203.1;dbname=shop', $user, $pass);

    //准备sql语句
    $sql="insert into nav(navname,navimage) values(:name,:image)";
    $name="111";
    $image="image";

    //预处理
    $stmt=$dbh->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':image',$image);
    $stmt->execute();       //执行sql语句

    $id=$dbh->lastInsertId();       //获取自增id
    var_dump($id);