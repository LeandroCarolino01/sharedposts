<?php
    class Pages extends Controller {
        public function __construct(){
          
        }

        public function index(){
            $data = [
                'title' => 'SharedPosts', 
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About us'
            ];
            $this->view('pages/about', $data);
        }
    }