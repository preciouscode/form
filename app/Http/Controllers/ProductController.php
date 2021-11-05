<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends controller {

    public function index() {

        print_r(route('products'));

        // dd("Hello precious");
       
        // $title ="Welcome to my Laravel 8 course";
        // $description ="Created by Precious";

        // $data =[
        //     'productOne' => 'Iphone',
        //     'productTwo' =>'Samsung'
        // ];

        //compact method
       // return view('products.index',
       //compact('title'),compact('description'));


       //with method
       //return view('products.index')->with('title', $title);
      // return view('products.index')->with('data', $data);

       //return view('products.index')->with('description', $description);

       //directtly in the view
       return view('products.index'
          // 'data' => $data
       );
    }

    public function about() {
        return 'About Us Page' ; 
          //  dd("Hello bugshunter");
    }

    // public function show($id) {
    //     return $id;
    // }

    public function show($name) {
        $data = [
            'iphone'=> 'iphone',
            'samsung'=> 'samsung'
        ];

        return view('products.index',[
            'products' => $data[$name] ?? 'products' . $name . 'does not exist'
        ]);
    }

}