<?php namespace App\Http\Controllers;

    
    class JsonController extends Controller{
        
        public function badge() {
            
            return Badge->json($uid);
                
        }
        
}