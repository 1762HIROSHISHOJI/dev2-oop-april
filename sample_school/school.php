<?php 
class School{
    
    private $level;
    private $totalUnits;
    private $lab;


    function setValues($level,$totalUnits,$lab){
        $this->level = $level;
        $this->totalUnits = $totalUnits;
        $this->lab = $lab;
    }



    function pricePerUnit(){ //determine price per year level(no calculation)
        if($this->level == 'first_year'){
            return 550;

        }elseif($this->level == 'second_year'){
            return  630;
        }elseif($this->level == 'third_year'){
            return 470;
        }else{
            return 501;
        }
    }
    
    function totalUnitPrice(){ // calculation of the total units total_units * unit_price per_year
        return $this->pricePerUnit() * $this->totalUnits;
    }


    public function get_lab(){ // determine if user has lab or no lab(no calculation)
        

        if($this->lab == 'no_lab'){
            return 0;
            // it is OK ?
        }elseif($this->lab == 'lab'){
            if($this->level =='first_year' ){
                return 3359;
            }elseif($this->level =='second_year' ){
                return 4000;
            }elseif($this->level =='third_year' ){
                return 2890;
            }else{
                return 3555;
            }

        }
    }


    
    public function totalTuition(){
        return $this->totalUnitPrice() + $this->get_lab();
    }

    }

    

    // function calculate_tuition(){
    //     if($this->level == 'first_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 550) + 3359;


    //     }elseif($this->level == 'first_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *550;
    //     }
    //     if($this->level == 'second_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 630) + 4000;


    //     }elseif($this->level == 'second_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *630;
    //     }
    //     if($this->level == 'third_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 470) + 2890;


    //     }elseif($this->level == 'third_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *470;
    //     }
    //     if($this->level == 'fourth_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 501) + 3555;


    //     }elseif($this->level == 'fourth_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *501;
    //     }
    //     return $tuition;

    // }
