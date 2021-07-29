<?php 

    // * MEMBUAT/CREATE TABLE DENGAN MENGGGUNKAN MIGRATION DI LARAVEL. 
    // * DENGAN MENGGGUNKAN MIGGRATION KITA BISA OTOMATIS MEMBUAT TABLE BERSETA FIELD DI MYSQL DENGAN LARAVEL ARTISAN.
    
    // * EXAMPLE : 
    php artisan make:migration create_users_table 

    // * DENGAN CARA DIATAS KITA BISA MEMBUAT SEBUAH TABLE DENGAN NAMA USERS KE MYSQL KITA.

    ####################################################################################################################

    // * SETELAH KITA BUAT SEBUAH TABLE DENGAN MENGGUNAKAN MIGRATION TERSEBUT. MAKA LARAVEL AKAN MEMBUATKAN SEBUAH FILE DIDALAM 
    // TODO FOLDER database/migration/namaFile.
    // * LALU DIDALAM FILE YANG TELAH DIBUA DIDALAMNYA KITA BISA ATUR ATAU BUAT FIELD NYA APA SAJA YG AKAN MAU DIBUAT 
    // * CONTOH DIDALAM FILE TERSEBUT, TERDAPAT METHOD BERNAMA FUNCTION UP(), DIDALAM METHOD TERSEBUT KITA BISA BUAT SEBUAH FIELD YANG AKAN INGIN BUAT .
    
    // * EXAMPLE DEFAULT BAWAAN LARAVEL FUNCTIONNYA SEPERTI INI :
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }


    
