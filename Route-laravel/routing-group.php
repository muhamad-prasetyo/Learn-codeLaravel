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



    // * ATAU  MEMBUAT ROUTE DI DALAM ROUTE GROUP 
    // * EXAMPLE : Pembuatan Route Account Profil
    Route::prefix('account')->group(function() {
        // definiskan Route
        Route::prefix('setting')->group(function() {
            Route::get('/change-password', function() {
                return 'Change-password';
            });

            Route::get('/profil', function() {
                return 'Profil';
            });

            Route::get('/photo', function() {
                return 'Photo';
            }); 
        });

        // diluar prefix setting 
        Route::get('follower', function() {
            return 'Follower';
        });
    });
    // ? dan untuk memanggilnya di url browser : 
    // * example: evaling.com/account/setting/nama yang ingin dipilih

