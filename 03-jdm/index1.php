<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>京东移动端</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="jd_container">

  <!--京东头部-->
  <div class="jd_header">
    <div class="logo jd_sprit"></div>
    <div class="search">
      <!--type:search: 小键盘右下角会显示search按钮-->
      <i class="jd_sprit"></i>
      <input type="search" placeholder="上海黑马22期">
    </div>
    <a class="login">登录</a>
  </div>

  <!--京东banner-->
  <div class="jd_banner">
    <ul class="clearfix">
      <li><a href="#"><img src="images/banner08.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner01.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner02.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner03.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner04.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner05.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner06.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner07.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner08.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/banner01.jpg" alt=""></a></li>
    </ul>

    <!--小圆点-->
    <ol>
      <li class="now"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ol>
  </div>

  <!-- 使用php动态渲染出来 -->
  <?php

    //php从数据库中查询到的，这些数据是可以变化。
    $navs = array(
      0 => array("url"=>"http://www.baidu.com", "src"=>"images/nav01.png", "text"=> "京东超市"),
      1 => array("url"=>"http://www.baidu.com", "src"=>"images/nav02.png", "text"=> "全球购"),
      2 => array("url"=>"http://www.baidu.com", "src"=>"images/nav03.png", "text"=> "全球购1"),
      3 => array("url"=>"http://www.baidu.com", "src"=>"images/nav04.png", "text"=> "京东超市2"),
      4 => array("url"=>"http://www.baidu.com", "src"=>"images/nav05.png", "text"=> "京东超市3"),
      5 => array("url"=>"http://www.baidu.com", "src"=>"images/nav06.png", "text"=> "京东超市4"),
      6 => array("url"=>"http://www.baidu.com", "src"=>"images/nav07.png", "text"=> "京东超市5"),
      7 => array("url"=>"http://www.baidu.com", "src"=>"images/nav08.png", "text"=> "京东超市6"),
      8 => array("url"=>"http://www.baidu.com", "src"=>"images/nav09.png", "text"=> "京东超市7"),
      9 => array("url"=>"http://www.baidu.com", "src"=>"images/nav10.png", "text"=> "京东超市8")
    );
  ?>

  <!--京东导航-->
  <div class="jd_nav">
    <ul class="clearfix">

      <?php foreach($navs as $k => $v) { ?>
      
        <li>
          <a href="<?php echo $v['url'] ?>">
            <img src="<?php echo $v['src'] ?>" alt="">
            <p><?php echo $v['text'] ?></p>
          </a>
        </li>
        
      <?php } ?>
     
      

    </ul>
  </div>

  <!--京东快报-->
  <div class="jd_news">
    <div class="logo"><img src="images/jd-news-tit.png" alt=""></div>
    <div class="info">
      <ul>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资1W5,智大前端黑马传22期，毕业薪资1W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资2W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资3W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资4W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资5W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资10W5</a></li>
        <li class="one-txt-cut"><a href="#">智大前端黑马传22期，毕业薪资1W5,智大前端黑马传22期，毕业薪资1W5</a></li>
      </ul>
    </div>
    <a href="#" class="more">| 更多</a>
  </div>


  <!--京东秒杀-->
  <div class="jd_seckill">
    <div class="seckill_title">
      <div class="fl">
        <i class="seckill_icon jd_sprit"></i>
        <span class="seckill_text">京东秒杀</span>
        <div class="seckill_time">
          <span>00</span>
          <span>:</span>
          <span>00</span>
          <span>:</span>
          <span>00</span>
        </div>
      </div>
      <a class="fr">更多秒杀 &gt;</a>
    </div>

    <?php
      //数据库中的数据
      $seckills = array(
        0=>array("href"=>"http://www.baidu.com", "src"=>"images/sec01.jpg", "new"=>1041, "old"=>19491),
        1=>array("href"=>"http://www.baidu.com", "src"=>"images/sec01.jpg", "new"=>1042, "old"=>19492),
        2=>array("href"=>"http://www.baidu.com", "src"=>"images/sec01.jpg", "new"=>1043, "old"=>19493),
        3=>array("href"=>"http://www.baidu.com", "src"=>"images/sec04.jpg", "new"=>1044, "old"=>19494),
        4=>array("href"=>"http://www.baidu.com", "src"=>"images/sec05.jpg", "new"=>1045, "old"=>19495),
        5=>array("href"=>"http://www.baidu.com", "src"=>"images/sec06.jpg", "new"=>1046, "old"=>19496),
        6=>array("href"=>"http://www.baidu.com", "src"=>"images/sec07.jpg", "new"=>1047, "old"=>19497),
        7=>array("href"=>"http://www.baidu.com", "src"=>"images/sec01.jpg", "new"=>1048, "old"=>19498),
        8=>array("href"=>"http://www.baidu.com", "src"=>"images/sec03.jpg", "new"=>1049, "old"=>19499),
        9=>array("href"=>"http://www.baidu.com", "src"=>"images/sec04.jpg", "new"=>1040, "old"=>19490),
        10=>array("href"=>"http://www.baidu.com", "src"=>"images/sec06.jpg", "new"=>1040, "old"=>19490),
       
      );
    ?>
    <div class="seckill_content">
      <ul class="clearfix">

        <?php for($i = 0; $i < count($seckills); $i++){ ?>
        <li>
          <a href="<?php echo $seckills[$i]['href'] ?>"><img src="<?php echo $seckills[$i]['src'] ?>" alt=""></a>
          <p>&yen;<?php echo $seckills[$i]['new'] ?></p>
          <p>&yen;<?php echo $seckills[$i]['old'] ?></p>
        </li>

        <?php } ?>
       
      </ul>
    </div>
  </div>


  <!--京东主会场-->
  <div class="jd_major">
    <ul>
      <li><a href="#"><img src="images/item01.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/item02.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/item03.jpg" alt=""></a></li>
    </ul>
  </div>


  <!--京东商品-->
  <div class="jd_product">
    <ul>
      <li>
        <a href="#"><img src="images/major_1.jpg" alt=""></a>
        <a href="#"><img src="images/major_2.jpg" alt=""></a>
        <a href="#"><img src="images/major_3.jpg" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="images/major_4.jpg" alt=""></a>
        <a href="#"><img src="images/major_5.jpg" alt=""></a>
      </li>
      <li>
        <a href="#"><img src="images/major_6.jpg" alt=""></a>
        <a href="#"><img src="images/major_7.jpg" alt=""></a>
      </li>
    </ul>
  </div>
</div>

<script src="js/iscroll.js"></script>
<script src="js/index.js"></script>
</body>
</html>