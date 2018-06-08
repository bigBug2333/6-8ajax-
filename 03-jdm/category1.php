<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>京东移动端-分类页</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/category.css">
</head>
<body>

<div class="jd_container">

  <div class="jd_header">
    <div class="icon_back jd_sprit"></div>
    <div class="search">
      <input type="search" placeholder="别睡了，起来嗨">
    </div>
    <div class="icon_menu jd_sprit"></div>
  </div>
  <div class="jd_content">

    <?php 
      $navs = [
        "热门推荐",
        "鞋子",
        "衣服",
        "袜子1",
        "袜子2",
        "袜子3",
        "袜子4",
        "袜子5",
        "袜子7",
        "袜子6",
        "裤子9",
        "热门推荐",
        "鞋子",
        "衣服",
        "袜子1",
        "袜子2",
        "袜子3",
        "袜子4",
        "袜子5",
        "袜子7",
        "袜子6",
        "裤子9",
        "热门推荐",
        "鞋子",
        "衣服",
        "袜子1",
        "袜子2",
        "袜子3",
        "袜子4",
        "袜子5",
        "袜子7",
        "袜子6",
        "裤子9"
      ];
    ?>
    <div class="nav">
      <ul>
       
        <?php foreach($navs as $k => $v) { ?>
        <li class="<?php echo $k == 1?'now':'';  ?>"><a href="javascript:;"><?php echo $v ?></a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="main">

      <div class="wrapper">
        <div class="img_box">
          <img src="images/cate_banner.jpg" alt="">
        </div>

        <h3>专场推荐</h3>
        <ul>
          <li>
            <a href="#">
              <img src="images/cate_item01.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item02.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item03.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item04.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item05.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item06.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item07.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item08.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item09.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
        </ul>
        <h3>专场推荐</h3>
        <ul>
          <li>
            <a href="#">
              <img src="images/cate_item01.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item02.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item03.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item04.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item05.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item06.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item07.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item08.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item09.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
        </ul>
        <h3>专场推荐</h3>
        <ul>
          <li>
            <a href="#">
              <img src="images/cate_item01.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item02.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item03.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item04.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item05.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item06.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item07.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item08.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item09.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
        </ul>
        <h3>专场推荐</h3>
        <ul>
          <li>
            <a href="#">
              <img src="images/cate_item01.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item02.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item03.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item04.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item05.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item06.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item07.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item08.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item09.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
        </ul>
        <h3>专场推荐</h3>
        <ul>
          <li>
            <a href="#">
              <img src="images/cate_item01.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item02.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item03.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item04.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item05.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item06.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item07.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item08.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/cate_item09.jpg" alt="">
              <p>新鲜水果</p>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </div>

</div>


<script src="js/iscroll.js"></script>
<script src="js/category.js"></script>
</body>
</html>