<?php

class AdminModulesController extends AdminController {
    function __construct() {

    }

    public function index(){
        $this->content = $this->SetTemplate('index.tpl');
        return $this->content;
    }
}
?>