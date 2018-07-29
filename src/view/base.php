<!DOCTYPE html>
<html lang="fr">
<head>

	<?php include("template/head.php") ?>

	<title>Du light pour vos desirs</title>
</head>

<body>

<header>

<?php include("template/header.php") ?>

	</header>

	<p class="container mt-"> Vous avez envie de manger un burger , une salade sans vous sentir coupable , vous êtes sur la bonne page , regardez ce que nous vous proposons !</p>
	<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-75" src="/public/images/burgers1.jpg" alt="burger">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="/public/images/salades_crevette1.jpg" alt="salades">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="/public/images/Salade_de_fruits_exotiques.jpg" alt="dessert aux fruits">
    </div>
  </div>
</div>
	</div>

<div class="container col-8">

	<h2 class="container mt-5 mb-5">Ici vous trouverez les informations nécessaires sur nous!</h2>

	<p class="font-weight-bold">Qu'est ce que l'on vous propose ?</p>
	<p> C'est simple , on vous propose de manger en vous faisant plaisir.
	</p>
	<p class="font-weight-bold"> Comment ça en se faisant plaisir ?</p>
	<p>Toute simplement notre gamme de produits est conçu pour avoir un minimum de calories . Comme cela vous pouvez vous faire plaisir en mangeant un burger par exemple sans vous sentir coupable et se dire je vais grossir en mangeant cela .</p>
	<p class="font-weight-bold">Où pouvez-vous nous trouver?</p>
	<p> Vous trouverez toutes ces informations sur notre page facebook. Comme nous utilisons un camion pour notre restaurant, nos lieux peuvent être différents chaque jour. Comme cela nous pouvons vous permettre de manger dans un cadre différent à chaque fois</p>


</div>
	<div>
		<h3 class="text-center border border-info rounded bg-info text-white container">Vos avis </h3>
	</div>



<div class="mt-3 mb-3 p-2 border-bottom">
        <h4><?php //echo $comment->getAuthor(); ?></h4>
        <p><?php //echo $comment->getComment(); ?></p>
</div>

	<footer>
	<?php include("template/footer.php") ?>
	</footer>
	</body>
</html>
