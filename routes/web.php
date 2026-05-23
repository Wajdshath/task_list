<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
 return view('about',compact('name', 'departments')) ; 

});


Route::get('tasks', function(){

  $tasks = DB::table('tasks')->get(); // هات كل البيانات يلي بالجدول tasks
  return view('tasks', compact('tasks'));
    
});

// اضافة البيانات للجدول في قاعدة البيانات 
Route::post('create', function(){
  $task_name = $_POST['name'];
  DB::table('tasks')->insert(['name' => $task_name ]);
  return redirect()->back(); // برجع لرابط تاسك وبلاقي المتغير لي اسمه تاسك  
    
});

Route::post('delete/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();
   return redirect()->back(); 
});

// استرجاع البيانات التي تمت اضافتها في الفورم 
