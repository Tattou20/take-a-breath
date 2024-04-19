<?php
        namespace App\Http\Controllers;
        use Illuminate\Support\Facades\Storage;

        class PageController extends Controller{

            public function home(){
                return view('home');
        }

        public function servicelist(){
                $json = Storage::disk('local')->get('data.json');

    // Decode the JSON data into a PHP array
    $data = json_decode($json, true);

    // Pass the data to your view
    return view('all-services', ['data' => $data]);
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

public function allServices(){
        // return view('all-services');
            // Read the JSON file contents
    $json = Storage::disk('local')->get('data.json');

    // Decode the JSON data into a PHP array
    $data = json_decode($json, true);

    // Pass the data to your view
    return view('all-services', ['data' => $data]);
}
 
        }
    ?>