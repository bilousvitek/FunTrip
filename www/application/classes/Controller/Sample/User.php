<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Sample_User extends Controller_Template {
    
    public $template = 'static/usercom';   
    public function before()
    {
        parent::before();
        View::set_global('title', 'TEST');				
        View::set_global('description', 'Сайт');

        $this->template->content = '';
       //  $this->template->bar ='';
        $this->template->error ='';
        $this->template->styles = array('bootstrap', 'agency');   
        $this->template->scripts = array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places', 'public/js/bootstrap.js', 'public/js/npm.js', 'public/js/jquery.js','public/js/bootstrap.min.js','http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', 'public/js/jqBootstrapValidation.js','public/js/agency.js');  
    }
    
} // End Common


