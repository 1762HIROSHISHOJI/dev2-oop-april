<?php

class Book
{
  private $r_num;
  private $title;
  private $author;


  public function setR_num($userRnum)
  {
    $this->r_num = $userRnum;
  }
  public function setTitle($userTitle)
  {
    $this->title = $userTitle;
  }
  public function setAuthor($userAuthor)
  {
    $this->author = $userAuthor;
  }

  public function getRows()
  {

    for ($i = 1; $i <= $this->r_num; $i++) {
      echo '<form class="" method="post">';
      echo '<table>';
      echo '<tr>';
      echo '<td><input type="text" name="author" required></td>';
      echo '<td><input type="text" name="title" required></td>';
    }
    echo '</tr';
    echo '</table>';
    echo '<input type="submit" name="btn_submit" value="Submit">';
    echo '</form>';
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getAuthor()
  {
    return $this->author;
  }
}
