<?php 

    // * DISINI KITA AKAN MEMBUAT SEBUAH VALIDASI UNTUK SEBUAH FORM 
    // * CONTOH MEMBUAT VALIDASI INPUT EMAIL PADA SEBUAH FORM DENGAN LARAVEL 

    // * EXAMPLE : 

    $this->validate($request, [
        'email' => 'required|email'
    ]);

    // * ini merupakan sebuah validate untuk mengecek apakah inputan sudah terisi, jika sudah terisi maka cek apakah inputan 
    // * merupakan sebuah email 
