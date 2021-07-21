<?php

class GbController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);

    }
    public function Index(){
        include_once(dirname(__FILE__).'../../comments/CommentsController.php');
        $comments = new CommentsController($this->query, $this->controller);
        $comments->material_id = 1;
        $comments->controller = $this->controller;
        $comments->tpl_view = 'gb.tpl';
        $comments ->Index();
        $this->smarty->assign(array(
            'site_title'       => $this->config->GbModuleTitle.' - '. $this->config->SiteTitle,
            'comments_form'                 => $comments->comments_form,
            'comments'                      => $comments->comments,
        ));
        if (count($comments->js) > 0){
            foreach ($comments->js as $j){
                $this->js[] = $j;
            }
        }
        if (count($comments->css) > 0){
            foreach ($comments->css as $j){
                $this->css[]=$j;
            }
        }
        $this->SetPath('gb/');
        $this->content = $this->SetTemplate('gb.tpl');
        return $this->content;
    }
}
?>