<!DOCTYPE html>
<html lang="fr">
<head>

	<?php include("template/head.php") ?>

	<title>Du light pour vos desirs</title>
</head>

<body>

<header class="pb-5">

<?php include("template/header.php") ?>

</header>
	<h1 class="mt-5 text-center">Vous souhaitez nous trouver ?</h1>
    <p class="text-center mt-5">Toutes les informations sur notre localisation se trouve sur notre <a href="" ><strong>Facebook</strong></a></p>

    <h1 class="text-center"><i class="far fa-clock"></i>Horaires</h1>
    <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">JOURS</th>
      <th scope="col">HORAIRES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">LUNDI</th>
      <td> 18 H - 22H</td>

    </tr>
    <tr>
      <th scope="row">MARDI</th>
      <td>11H - 14H / 18 H - 22H</td>

    </tr>
    <tr>
      <th scope="row">MERCREDI</th>
      <td>11H - 14H / 18 H - 22H</td>
    </tr>
          <tr>
      <th scope="row">JEUDI</th>
      <td>11H - 14H / 18 H - 22H</td>
    </tr>
          <tr>
      <th scope="row">VENDREDI</th>
      <td>11H - 14H / 18 H - 22H</td>
    </tr>
          <tr>
      <th scope="row">SAMEDI</th>
      <td>11H - 14H / 18 H - 22H</td>
    </tr>
          <tr>
      <th scope="row">DIMANCHE</th>
      <td>FERMEE</td>
    </tr>
  </tbody>
</table>
    </div>
	<h1 class="text-center mt-5"> Donnez nous votre avis </h1>


<div class="text-center">
  <form action="?action=addComment" method="post">
    Pseudo : <br/>
    <input type="text" name="author"/><br/>

    Commentaires :<br/><textarea name="comment"></textarea><br/>
    <button type="submit">Poster</button>
  </form>
    </div>
	<footer class="mt-5">
    </footer>
    </body>


</html>