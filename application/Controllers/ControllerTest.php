<?php

namespace Application\Controllers;
use Application\Core\View;
use Application\Models\Main;
class ControllerTest
{
    public function testAction()
    {   
      
      $arr = require '../application/config/NumberCard.php';
      $view = new View();
      echo '<br><br>';
    	$main = new Main($arr);
      $arrrez = $main->rezCheckCards();
     	View::pageCode('../application/views/test/test.php', $arrrez);
     	
    }

}
