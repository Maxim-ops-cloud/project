<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
<body>
<?php
require('../connect.php');
require('../functions/math.php');
$id = $_GET['id'];
?>

<?php foreach ($user as $k => $v):?>
<?php if($v['id'] === $id):?>
  <div class="shopping-cart">
     <div class="title"><?=$v['name']?></div>
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
        <div class="image">
          <img src="<?=$v['photo']?>" alt="" />
        </div>
 
      <div class="description">
       <div class="total">Цена с учетом скидки:</div>
       <div class="total-price"><?=add_percent($v['price'], $v['precent'])?> Руб</div>
       <div class="total-ship">Цена доставки:</div>
       <div class="total-price"><?=$v['ship']?> Руб</div>
       <div class="count">
       Итого:  <?=add_percent_ship ($v['price'], $v['precent'], $v['ship'])?>
       руб
      </div>
      </div>
      </div>
     </div>
    </div>
    </div>
   </div>
 <?php endif;?>
<?php endforeach;?>
</body>
</html>
