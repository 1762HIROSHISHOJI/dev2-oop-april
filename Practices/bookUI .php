<?php 
include 'Book/Book.php';

//object
  $book = new Book;


  //echo $book->genre 'fiction';

  $book->setData('The da vinci code', 'Dan Brown', 'Fiction');

  echo $book->getTitle(). "is a funny book, the genre is ". $book->getGenre(). " written by ".$book->getAuthor();

?>