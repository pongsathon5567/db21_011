<?php
class PagesController
{
    public function home()
    {
        require_once("./views/pages/Home.php");
    }
    public function error()
    {
        require_once("./views/pages/Error.php");
    }
}
?>