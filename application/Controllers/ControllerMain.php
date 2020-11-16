<?php

namespace Application\Controllers;
use Application\Core\View;

class ControllerMain
{
    public function mainAction()
    { 
      $view = new View(); 
      View::pageCode('../application/views/main/index.php', $arrrez);
    }

}
