<!DOCTYPE html>
<html>
	<head>
		<meta Charset='UTF-8'>
	</head>
</html>

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

$biblio->showBothLibrary($biblio2);


?>