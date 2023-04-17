<?php

class Book
{
  //properties, methods
  private $title = 'Don Quixote';
  private $author = 'Miguel de Cervantes';
  public $genre = 'Novel';





  //setters -used to set data for properties
  public function setData($userTitle, $userAuthor, $userGenre)
  {
    $this->title = $userTitle;
    $this->author = $userAuthor;
    $this->genre = $userGenre;
    
  }

  //getters -is to display in UI / process calculations
  function getAuthor()
  {
    return $this->author;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getGenre()
  {
    return $this->genre;
  }
}
