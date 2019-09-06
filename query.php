<?php
  // 思路: 
  // 1. 准备sql语句, 查询数据库, 得到数组
  // 2. 遍历数组进行页面渲染
  header('content-type:text/html;charset=utf-8');
  // 导入公共函数
  include_once "fn.php";
  $sql = "select * from intruduce order by id desc";
  // 得到学生数组
  $arr = my_query( $sql );
  // echo '<pre>';
  // print_r($arr);
  // echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/query.css">
  <title>数据列表</title>
</head>
<body>
<h4>用户信息列表 <a href="index.html">添加数据</a></h4>
<table>
    <tr>
      <th>ID</th>
      <th>姓名</th>
      <th>年龄</th>
      <th>性别</th>
      <th>爱好</th>
      <th>操作</th>
    </tr>
    <?php foreach( $arr as $k => $v) {?>
      <tr>
      <td><?php echo $v['id']?></td>
      <td><?php echo $v['name']?></td>
      <td><?php echo $v['age']?></td>
      <td><?php echo $v['sex']=== '0' ? '男' : '女'; ?></td>
      <td>
        <?php 
        echo $v['hobby'] === '1'? '打羽毛球': '';
        echo $v['hobby'] === '2'? '刺激战场': '';
        echo $v['hobby'] === '3'? 'CF': '';
        echo $v['hobby'] === '4'? '踢足球': '';
        echo $v['hobby'] === '5'? '睡觉': '';
        ?></td>
      <td>
          <a href="delete.php?id=<?php echo $v['id'] ?>">删除</a>
          <a href="details.php?id=<?php echo $v['id'] ?>">详情</a>
          <a href="edit.php?id=<?php echo $v['id'] ?>">编辑</a>
      </td>
      </tr>
    <?php }?>
</table>
</body>
</html>
