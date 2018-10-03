<!DOCTYPE html>
<html>
	<head>
		<meta Charset='UTF-8'>
	</head>
</html>

<?php
	/**
	 * 
	 */
	class Book 
	{
		private $title;
		private $author;
		private $editor;
		private $pageNb;
		

		function __construct($title, $author, $editor, $pageNb)
		{
			$this->title = $title;
			$this->author = $author;
			$this->editor = $editor;
			$this->pageNb = $pageNb;
		}

		public function getTitle(){
			return $this->title;
		}

		public function getAuthor(){
			return $this->author;
		}

		public function getEditor(){
			return $this->editor;
		}

		public function getPageNb(){
			return $this->pageNb;
		}

		public function setTitle($x){
			return $this->title = $x;
		}

		public function setAuthor($x){
			return $this->author = $x;
		}

		public function setEditor($x){
			return $this->editor = $x;
		}

		public function setPageNb($x){
			return $this->pageNb = $x;
		}

		public function showBook(){
			return 'Le livre ' . '<strong><font color="red">'. $this->title .'</font></strong>'." écrit par " .'<strong><font color="red">'. $this->author .'</font></strong>'. " et édité par " .'<strong><font color="red">'. $this->editor .'</font></strong>'. ' a ' .'<strong><font color="red">'. $this->pageNb .'</font></strong>'. ' pages.';
		}
	}



//echo $xavier->showBook();
?>