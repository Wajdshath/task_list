<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Wajd ahmad'  ;

    $departments=[

      "01" => "Tichnical" ,
      "02" => "Financail" ,
      "03" => "Sales" 
    ];
  //  return view('about', ['name' => $name]);
    return view('about')->with('name', $name);
});

Route::post('/about', function () {

  $name=$_POST['name'];
  $departments=[

    "01" => "Tichnical" ,
    "02" => "Financail" ,
    "03" => "Sales" 
  ];
 return view('about' , compact('name' , 'departments')) ; 

});