<?php 

    // * ROUTE GROUP UNTUK MEMPERMUDAH DAN MEMPERSINGKAT PENULISAN CODE PADA ROUTE,
    // * JIKA ROUTE YANG AKAN DIBUAT SAMA DAN DIGUNAKAN UNTUK HAL YANG DIAKSES SAMA BEDA PREFIX URL BELAKANG SAJA 

    // todo ||  EXAMPLE PEMBUATAN ROUTE PROFIL USER 

    // * EXAMPLE : 
    Route::prefix('user')->group(function() {
        // * definisikan route 
        Route::get('change-password', function() {
            return 'Change-password';
        });
        
        Route::get('/profil', function() {
            return 'Profil';
        });

        Route::get('/photo', function() {
            return 'Photo';
        });

    });

    // ? dan untuk memanggilnya di url browser : 
    // * example: evaling.com/user/nama route yang dipanggil