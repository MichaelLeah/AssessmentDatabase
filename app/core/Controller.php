<?php
/*
* Final Year Project - Assessment Database
* @author Michael Leah
*/

class Controller 
{
    protected function model($model)
    {
        // REQUIRES FILE CHECK
        require_once '../app/models/' . $model . '.php'; 
        return new $model();
    }
    
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}

