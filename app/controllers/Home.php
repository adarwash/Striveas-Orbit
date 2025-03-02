<?php 
    class Home extends Controller{
        public function index(){
            
            $db = new EasySQL(DB1);
            $t1 = $db->select('SELECT TOP 10 * FROM Person.Person');
            var_dump($t1);
            $this->view('home/index');
        }
    }