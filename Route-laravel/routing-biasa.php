<?php 

    // * CONTOH PENULISAN ROUTE BIASA PADA LARAVEL 

    // * INI MERUPAKAN ROUTE BIASA PADA LARAVEL
    // * JADI PADA SAAT DI JALANKAN ATAU DIPANGGIL MAKA AKAN MENGEMBALIKAN ATAU MENAMPILKAN User pada browser
    Route::get('/user', function() {
        return 'User';
    });



    // * ROUTE DENGAN PARAMETER Parsing 
    Route::get('/user/{id}', function($id) {
        return 'User' . $id;
    });



    // * ROUTE DENGAN LEBIH DARI 1 PARAMETER Pasing 
    Route::get('/user/{id}/articel/{articelId}', function($id, $articelId) {
        return 'User' . $id . 'Articel' . $articelId;
    });