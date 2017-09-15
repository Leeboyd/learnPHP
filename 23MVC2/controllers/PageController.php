<?php
  class PageController {
    public function home() {
      // receive the request
      // Delegate to template
      // Return a response


      // require 'views/index.view.php'; 
      return view('index');
      
           
    }

    public function about() {
      $company = 'Laravel';
      return view('about', ['language' => $company]);
    }

    public function addTask() {
      return view('addTask');
    }
  }