<?php
	include 'book.php';

	/**
	 * 
	 */
	define('MAX_BOOK', 100);

	class Library 
	{
		const MAX_BOOK = '100';
		private $name;
		private $adress;
		private $max = MAX_BOOK;
		private $bookList = array(MAX_BOOK);
		
		function __construct($name, $adress)
		{
			$this->name = $name;
			$this->adress = $adress;
			
		
		}

		public function getName(){
			return $this->name;
		}

		public function getAdress(){
			return $this->adress;
		}

		public function getMax(){
			return $this->max;
		}

		public function getBookList(){
			return $this->bookList;
		}

		public function setName($x){
			return $this->name = $x;
		}

		public function setAdress($x){
			return $this->adress = $x;
		}

		public function setMax($x){
			return $this->max = $x;
		}

		public function setBookList($x){
			return $this->bookList = $x;
		}

		public function showBookOfLibrary(){
			echo 'La bibliothéque '. $this->getName() . ' contient les livres suivant : ' .'<br/>';
			for ($i=0; $i < sizeof($this->bookList) ; $i++) { 
				echo 'Livre '.($i+1).' : ' . $this->bookList[$i]->showBook().'<br/>';
			}
			
		}

		public function addBook($book){
			if(is_a($book, 'Book')){
				array_push($this->bookList,$book );
			}
			
		}

		public function removeBook($book){
			if(is_a($book, 'Book')){
				for ($i=0; $i < sizeof($this->bookList); $i++)
				{ 
					if($this->bookList[$i] == $book){
						unset($this->bookList[$i]);
						$this->bookList = array_values($this->bookList);
					}
				}
			}
			
			
		}

		public function removeDuplicate(){
			$this->bookList = array_unique($this->bookList, SORT_REGULAR);
			$this->bookList = array_values($this->bookList);
		}

		public function showBothLibrary ($library){
			if(is_a($library, 'Library')){
				$this->showBookOfLibrary();
				$library->showBookOfLibrary();
			}
			else{
				return "Le paramétre n'est pas une library";
			}
		}

		public function compareTo($b1, $b2){
			return strcmp($b1->getAuthor(),$b2->getAuthor());

		}

		public function Tri(){
			usort($this->bookList, array($this,'compareTo'));
		}

	}


?>