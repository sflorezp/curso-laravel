<?php

class Class2Controller extends BaseController{
    
    public function getCss() {
        return View::make('index');
    }
    
     public function getCss2() {
        return View::make('index2');
    }
    
}
