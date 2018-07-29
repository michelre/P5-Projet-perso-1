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

		<div class="text-center col-lg-6 mt-3">
<h2>Les Burgers"</h2>
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Burgers BOEUF</th>
      <th scope="col ml-1 ">Recettes</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($recettes as $recette) { ?>
    <tr>
      <th scope="row"><?php echo $recette->getname(); ?></th>
      <td>
          <?php echo $recette->getcontent() ?>
      </td>
      </tr>
    </tbody>
      <?php } ?>
  </table>
	</div>
	<footer class="mt-5">
    </footer>
    </body>


</html>