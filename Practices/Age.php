<?php

class Age
{

  private $fullname;
  private $birthyear;
  private $currentyear;

  public function setProfile($userFname, $userByear, $userCyear)
  {
    $this->fullname = $userFname;
    $this->birthyear = $userByear;
    $this->currentyear = $userCyear;
  }

  function getName()
  {
    return $this->fullname;
  }

  public function getAge()
  {
    $age = $this->currentyear - $this->birthyear;

    return $age;
  }
}
