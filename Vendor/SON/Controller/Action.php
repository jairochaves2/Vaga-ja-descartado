<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 21/05/2018
 * Time: 15:03
 */

namespace SON\Controller;


abstract class Action{

    protected $views;
    private $action;
    private $css;

    public function __construct(){

        $this->views = new \stdClass();

    }

    protected function render($action, $layout = true){
        $this->action = $action;
        if ($layout == true and file_exists("../index.phtml")){
            include_once "../index.phtml";
        }else{
            $this->content();
        }
    }

    protected function content(){

        $current = get_class($this);
        $singleClasName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\","", $current))));
        include_once "../App/Views/".$singleClasName."/".$this->action.".phtml";
    }

}