<?php
  header('content-type/text/html;charset=utf-8');
  include_once './fn.php';
  // 1. 收集普通表单提交的用户信息  $_POST
  $name = $_POST['name'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $hobby = $_POST['hobby'];
  // 3. 准备 sql 语句, 调用封装好的方法, 将数据存储到数据库中
    $sql = "insert into intruduce (name, age, sex, hobby)
    values ('$name', '$age', '$sex', '$hobby')";

    // 4. 调用方法, 执行, 返回值 true/false
  if ( my_exec( $sql ) ) {
    echo "添加成功";
    // 跳转到 list.php
    header('location:query.php');
  }
  else {
    echo "添加失败";
  }
?>