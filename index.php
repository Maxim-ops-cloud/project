<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

<header>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Shogo</h5>
  <nav style="margin-left:auto">
    <a class="p-2 text-dark" href="other/blog.php">Контакты</a>
    <a class="p-2 text-dark" href="other/about.php">О нас</a>
  </nav>
  
</div> 
<div>
<?php require('connect.php');
     require('functions/math.php');
?>
 
</div>
 <?php foreach($user as $k => $a):?>
  <div class="container" id=<?=$k?>>
    <div class="card-deck mb-3 text-center">
    <div class="card w-32 mb-4 shadow-sm">

      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?=$a['name']?></h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
        <img src="<?=$a['photo']?>" style='width:20%' alt="iPhone">
        </ul>
        <div>
        <div> <p style='text-decoration:line-through'>Цена: <?=$a['price']?> руб</p> </div>
        <div> <p>Новая цена: <?=add_percent($a['price'], $a['precent'])?> рублей</p> </div>
        </div>
         <h1 class="card-title pricing-card-title"></small></h1>
        <button type="submit" class="btn btn-lg btn-block btn-outline-primary"><a style='text-decoration:none' href="../basket/basket.php?id=<?=$k?>" >Купить</a></button>
      </div>
    </div>
    </div>
  </div>
  </div>
</div> 
<?php endforeach;?>
</header>
<script type="text/javascript">
  
</script>

</body>
</html>