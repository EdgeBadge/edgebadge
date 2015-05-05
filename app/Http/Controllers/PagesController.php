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
            $badge = array('fachname'=>'Deutsch', 'lehrername'=>'Faustbadge', 'badgesNum' => '42');
            return view('dashboard_schueler_modules', $badge);
        }

        public function subject(){
            $badge = array('fachname'=>'Deutsch', 'badgename'=>'Faustbadge');
            return view('subject_modules', $badge);
        }

        public function badgedet(){
            $badge = array('badgename'=>'Rauschermeister', 'fach'=>'Pudgarn', 'ausstellungsDatum' => '2015-4-20', 'ausstellungsLehrer'=>'Herr Prof. Siebenundzwanzig', 'ausstellungsKrit'=>'Man muss der Meister in allem sein', 'beschreibung'=>'Du bist jetzt der Meister in allem');
            return view('badgedetail_modules', $badge);
        }

        public function register(){
            return view('eb_login');
        }

}