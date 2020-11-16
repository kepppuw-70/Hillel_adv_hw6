<?php
namespace Application\Models;

class Main {

  protected $number;

  public function __construct($arr)
  {
    $this->arr = $arr;
  }

   public function rezCheckCards() {
         foreach ($this->arr as $key => $value) {
             $this->number = strrev(preg_replace('/[^\d]/','',$value));
             $sum = 0;
             for ($i = 0, $j = strlen($this->number); $i < $j; $i++) {
               if (($i % 2) == 0) {
                  $val = $this->number[$i];
               } else {
                  $val = $this->number[$i] * 2;
                  if ($val > 9)  $val -= 9;
               }
               $sum += $val;
         }
         $this->arrrez[$value] = (($sum % 10) == 0);
      }
      return $this->arrrez;
   }
}

         