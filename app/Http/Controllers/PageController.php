<?php
        namespace App\Http\Controllers;
        class PageController extends Controller{

            public function home(){
                return view('home');
        }

        public function services(){
            return view('services');
    }
         
    public function addService(){
        return view('add-service');
}
        public function about(){
            return view('about');
    }

    public function feedback(){
        return view('feedback');
}

   
        }
    ?>