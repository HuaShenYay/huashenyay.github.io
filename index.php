<?php
header("Content-Type:text/html;charset=utf-8");
require './lib/init.php';

// $data = array('name' => "张三", 'age' => '18', 'sex' => '男', 'high' => '159');
// $sql = mExec('cat', $data, 'update', "id='123'");
// echo ROOT;

//H:i:s 设置当前时间时区为中国 点击Wampserver64的php.ini下的timezone为“PRC”中国时间
//echo date('Y-m-d H:i:s', time());
// echo convert('1546325721');
// $sql = "select num from cat where cat_id=6";
// $row = mGetRow($sql);
// $num = $row['num'] + 1;
// var_dump($num);

session_start();
if (!isset($_SESSION['login'])) {
  echo "<script>window.location.href='login.php'</script>";
  exit();
} else {
  echo "<script>window.location.href='index.php'</script>";
  exit();
}

//主页栏目显示：首页、文章中心、个人中心
//Php框架：thinkphp、 （php主要做界面：面向对象、面向过程）
//主页面：分类栏目显示栏目名称和栏目num（指的是栏目下的文章数）
