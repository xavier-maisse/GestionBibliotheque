<?php

include 'library.php';

$xavier = new Book("test1","test","test",'123');
$xavier1 = new Book("test2","test","test",'123');
$xavier2 = new Book("test3","test","test",'123');
$xavier3 = new Book("test4","test","test",'123');
$xavier4 = new Book("test5","test","test",'123');
$xavier5 = new Book("test6","test","test",'123');
$xavier6 = new Book("test7","test","test",'123');
$xavier7 = new Book("test8","test","test",'123');
$xavier8 = new Book("test9","aest","test",'123');
$xavier9 = new Book("test10","test","test",'123');
$xavier10 = new Book("test11","test","test",'123');
$hugo = new Book("Ugo la pute", "Xavier" , "ede" , "1");

$listlivre = array($xavier10,$xavier9,$xavier8,$xavier8);

$biblio = new library('LibraryIUT', 'Gaston');

$biblio->setBookList($listlivre);

//$biblio->removeBook($xavier10);
//$biblio->addBook($xavier7);
//$biblio->removeDuplicate();
//$biblio->Tri();
//$biblio->showBookOfLibrary();


$listlivre2 = array($xavier10,$xavier9,$xavier8,$xavier8);
$biblio2 = new library('LibraryIUT2', 'Gaston');
$biblio2->setBookList($listlivre2);


//$biblio->showBothLibrary($biblio2);




if(isset($_POST['envoyerLivre'])){
	$titreLivre = $_POST['livreTitre'];
	$biblioLivre = $_POST['biblioChoix'];
	if($biblioLivre == 1){
		$biblio->removeBook($titreLivre);
	}
	elseif($biblioLivre == 2){
		$biblio2->removeBook($titreLivre);
	}
}
else{
	echo 'Remplir le formulaire';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta Charset='UTF-8'>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		
	</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">iBiblio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Ajouter
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="remove.php">Supp</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

<h1>Supprimer un livre</h1><br/>
<form class="form-horizontal" method="POST">
	<fieldset>


		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="livretitre">Livre</label>  
		  <div class="col-md-4">
		  <input id="livretitre" name="livreTitre" type="text" placeholder="La Cabane Magique" class="form-control input-md" required="">
		    
		  </div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="biblioChoix">Choisir la bibliothéque</label>
		  <div class="col-md-4">
		    <select id="biblioChoix" name="biblioChoix" class="form-control">
		      <option value="1"><?php echo $biblio->getName()?></option>
		      <option value="2"><?php echo $biblio2->getName()?></option>
		    </select>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="envoyerLivre">Supprimer le Livre</label>
		  <div class="col-md-4">
		    <button id="envoyerLivre" name="envoyerLivre" class="btn btn-primary">Supp !</button>
		  </div>
		</div>
	</fieldset>
</form>

<div class="livre-position">
	<h2><?php echo $biblio->showBookOfLibrary(); ?></h2>
	<br/>
	<br/>
	<h2><?php echo $biblio2->showBookOfLibrary(); ?></h2>
</div>

</html>

