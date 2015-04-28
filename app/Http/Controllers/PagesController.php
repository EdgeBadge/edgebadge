<?php namespace App\Http\Controllers;

    
    class PagesController extends Controller{
        
        public function about() {
            
            $people = [];
            
            return view('pages.about', compact('people'));
                
        }
        
        public function contact() {
        
            return view('pages.contact');
            
        }

        public function persona() {
        
            return view('pages.persona');
            
        }
        
        public function login() {
        
            return view('pages.success');
            
        }

        public function dashboard() {
            $user = array('firstname'=>'Peter', 'lastname'=>'Schiffmann');
            return view('badge', $user);
            
        }

        public function badgeErstellen() {
            $user = array('firstname'=>'Peter', 'lastname'=>'Schiffmann');
            return view('badge_erstellen_teacher', $user);
            
        }

        public function dashboard_schueler(){
            return view('dashboard_schueler_modules');
        }

        public function subject(){
            return view('subject_modules');
        }

        public function badgedet(){
            return view('badgedetail_modules');
        }
}