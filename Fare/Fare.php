<?php

class Fare
{

  private $age;
  private $distance;
  private $totalFare;

  public function setAge($userAge)
  {
    $this->age = $userAge;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setDistance($userDistance)
  {
    $this->distance = $userDistance;
  }

  public function getDistance()
  {

    return $this->distance;
  }

  public function setFare($userAge, $userDistance)
  {
    $flatfare = 8;

    if ($userDistance <= 4 && $userAge >= 60) {

      return $this->totalFare = $flatfare * 0.8;
    } else if ($userDistance <= 4) {
      return $this->totalFare = $flatfare;
    } else if ($userDistance > 4 && $userAge >= 60){
      return $this->totalFare = $flatfare + ($userDistance - 4) * 0.8;
    } else {
      return $this->totalFare = $flatfare + ($userDistance - 4);
    }
  }
  public function getFare()
  {
    return $this->totalFare;
  }
}
