<?php 

    // * MENGGUNAKAN ALIS NAME PADA ROUTE DI LARAVEL 
    // * ALIAS NAME DIGUNAKAN UNTUK MEMPERSINGKAT PENGGUNA ATAU PEMANGGILAN NAMA URL 
    // * LALU KITA HANYA MEMANGGIL NAMA ALIAS YANG TELAH DIBUAT DIDALAM ROUTE NYA.

    // *EXAMPLE : memanggil url redirect tapi di direct ke route home/landingprofil
    Route::get('redirect', function() {
        return redirect()->route('homepage');
    });

    Route::get('home/landingprofil', function() {
        return 'Landing INI';
    })->name('homepage'); 

    // ! fungsi name() diatas berguna untuk memberi nama alias yg ingin kita gunakan atau untuk kita panggil route nya 