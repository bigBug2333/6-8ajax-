<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    div {
        width: 600px;
        margin: 0 auto;
    }

    p {
        height: 30px;
        line-height: 30px;
        border: 1px solid #000;
    }
  </style>
</head>
<body>


<?php
    $user = array(
        "name1" => "莫",
        "name2" => "彪",
        "age" => 22
    );
?>

<div>
    <p><span>姓</span><span> <?php echo $user["name1"] ?> </span></p>
    <p><span>名</span><span><?php echo $user["name2"] ?></span></p>
    <p><span>年龄</span><span><?php echo $user["age"] ?></span></p>
</div>


</body>
</html>