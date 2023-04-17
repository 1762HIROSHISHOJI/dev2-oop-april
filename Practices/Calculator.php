<?php

class Calculator
{

  private $fnum;
  private $snum;
  private $formula;

  public function setCalc($calcFnum, $calcSnum, $calcFormula)
  {
    $this->fnum = $calcFnum;
    $this->snum = $calcSnum;
    $this->formula = $calcFormula;
  }

  public function setFormula(){

      if ($this->formula == "add"){
        $add = $this->fnum + $this->snum;

      return $add;

    }else if($this->formula == "sub"){
        $sub = $this->fnum - $this->snum;

      return $sub;

    }else if($this->formula == "multi"){
        $multi = $this->fnum * $this->snum;

      return $multi;

    }else if($this->formula == "div"){
        $div = $this->fnum / $this->snum;
      return $div;
    }
  }
}