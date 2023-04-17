<?php

class School
{

  private $fullname;
  private $unitnumber;
  private $yearlevel;
  private $userUlevel;
  private $labchoice;
  private $unitprice;
  private $labprice;
  private $totalUprice;
  private $tuition;

  //FULLNAME
  public function setName($userFname)
  {
    $this->fullname = $userFname;
  }
  public function getName()
  {
    return $this->fullname;
  }

  //UNITS COUNT
  public function setUnum($userUnum)
  {
    $this->unitnumber = $userUnum;
  }
  public function getUnum()
  {
    return $this->unitnumber;
  }

  //YEAR LEVEL
  public function setYlevel($userYlevel)
  {
    $this->yearlevel = $userYlevel;
  }

  public function getYlevel()
  {
    if ($this->yearlevel == 1) {
      $this->userUlevel = "firstyear";
    } else if ($this->yearlevel == 2) {
      $this->userUlevel = "secondyear";
    } else if ($this->yearlevel == 3) {
      $this->userUlevel = "thirdyear";
    } else { // ($this->yearlevel == 4)
      $this->userUlevel = "fourthyear";
    }
    return $this->userUlevel;
  }

  public function setLchoice($userChoice)
  {

    $this->labchoice = $userChoice;
  }


  //TOTAL UNIT PRICE(unitnumber * unitprice)
  public function getUprice()
  {
    if ($this->yearlevel == 1) {
      $this->unitprice = 550;
    } else if ($this->yearlevel == 2) {
      $this->unitprice = 630;
    } else if ($this->yearlevel == 3) {
      $this->unitprice = 470;
    } else { // ($this->yearlevel == 4)
      $this->unitprice = 501;
    }
    return $this->totalUprice = $this->unitprice * $this->unitnumber;
  }

  //labprice(depend on Year Level and choice labchoice yes or no)
  public function getLprice()
  {
    if ($this->labchoice == "yes") {
      if ($this->yearlevel == 1) {
        $this->labprice = 3359;
      } else if ($this->yearlevel == 2) {
        $this->labprice = 4000;
      } else if ($this->yearlevel == 3) {
        $this->labprice = 2890;
      } else { //($this->yearlevel == 4){
        $this->labprice = 3555;
      }
      return $this->labprice;
    } else //($this->labchoice == "no")
    {
      return $this->labprice = "Lab is not selected.";
    }
  }
  //TOTAL TUITION(uprice+labprice)

  public function getTuition()
  {
    if ($this->labchoice == "yes") {
      $this->tuition = $this->labprice + $this->totalUprice;
      return $this->tuition;
    } else {
      $this->tuition = $this->totalUprice;
      return $this->tuition;
    }
  }
}
