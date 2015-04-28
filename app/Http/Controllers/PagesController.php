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
            
            return view('dashboard_teacher');
            
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