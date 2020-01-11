<?php
    class Pages extends Controller {
        public function __construct(){
          
        }

        public function index(){
            $data = [
                'title' => 'SharedPosts', 
                'description' => 'Simple social network built on Leandros PHP framework'
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About us',
                'description' => 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }