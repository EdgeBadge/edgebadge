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

        public function badgeAusstellen() {
            $user = array('firstname'=>'Peter', 'lastname'=>'Schiffmann');
            return view('badge_ausstellen_teacher', $user);
        }

        public function selectStudents() {
            $user = array('firstname'=>'Peter', 'lastname'=>'Schiffmann');
            return view('select_students', $user);
        }

        public function dashboard_schueler(){
            $badge = array('multi' => array('fachname'=>array('Deutsch', 'Mathematik', 'Englisch', 'Programmieren', 'Chemie', 'Sport'), 'lehrername'=>array('Gruber', 'Muber', 'Luber', 'Schuber','Ruder', 'Messi'), 'badgesNum' => array('4','2','0','20','30', '31')));
            return view('dashboard_schueler_modules', $badge);
        }

        public function subject(){
            $badge = array('multi' => array('fachname'=>'Deutsch', 'badgename'=>array( 'Faustbadge','Königsbadge','Tafelbadge', 'Grammatikbadge', 'Faustbadge','Königsbadge','Tafelbadge', 'Grammatikbadge', 'Faustbadge','Königsbadge','Tafelbadge', 'Grammatikbadge', 'Faustbadge','Königsbadge','Tafelbadge', 'Grammatikbadge')));
            return view('subject_modules', $badge);
        }

        public function badgedet(){
            $badge = array('badgename'=>'Rauschermeister', 'fach'=>'Pudgarn', 'ausstellungsDatum' => '2015-4-20', 'ausstellungsLehrer'=>'Herr Prof. Siebenundzwanzig', 'ausstellungsKrit'=>'Man muss der Meister in allem sein', 'beschreibung'=>'Du bist jetzt der Meister in allem');
            return view('badgedetail_modules', $badge);
        }

        public function register(){
            return view('eb_login');
        }

        public function profile(){
            $profil = array('schuelerName'=>'Max Mustermann', 'class'=>'4CI', 'mail'=>'max@mustermann.at', 'beschreibung'=>'Ich bin der beste Schüler dieser Welt!!!' );
            return view('profile', $profil);
        }
}