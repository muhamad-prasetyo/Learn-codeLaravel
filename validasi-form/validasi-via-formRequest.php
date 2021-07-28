<?php 

    // * VALIDASI DENGAN CLASS FORM REQUEST 
    // * UNTUK MELAKUKAN VALIDASI DENGAN AKURAT ATAU LEBIH AMAN MAKA KITA BISA GUNAKAN SEBUAH CODE ARTISAN UNTUK,
    // * MEMBUATKAN SEBUAH FORM-REQUEST YANG SUDAH DIBUATKAN OLEH LARAVEL.

    // * EXAMPLE : 

    php artisan make:request namaFile 

    // * ATAU BERIKUT :
     php artisan make:request SubscriptionFormRequest 

    // * ATAU DENGAN TAMBAHAN FOLDER : 
    php artisan make:request Newsletter\\SubscriptionFormRequest 
