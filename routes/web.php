<?php

use App\User;

Route::get('/morley', function () {
   $data = $_GET['wine'];

   $wine = ['morley'=> $data];

   $user = new User;
   $user->morley = json_encode($data);
   $user->save();
});


Route::get('/tae', function(){
    $users = User::all();

    foreach($users as $user) {
        
        echo json_decode($user).'<br><br>';
    }
});

