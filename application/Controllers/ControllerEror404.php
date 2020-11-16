<?php

namespace Application\Controllers;
use Application\Core\View;
class ControllerEror404
{
    public function eror404Action()
    {
       $view = new View();   
       View::pageCode('../application/views/errors/eror404.php', $arrrez);
    }

}
