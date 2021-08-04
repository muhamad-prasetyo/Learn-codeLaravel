<?php 

    // * MEMBUAT/CREATE TABLE DENGAN MENGGGUNKAN MIGRATION DI LARAVEL. 
    // * DENGAN MENGGGUNKAN MIGGRATION KITA BISA OTOMATIS MEMBUAT TABLE BERSETA FIELD DI MYSQL DENGAN LARAVEL ARTISAN.
    
    // * EXAMPLE : 
    php artisan make:migration create_users_table

    // * DENGAN CARA DIATAS KITA BISA MEMBUAT SEBUAH TABLE DENGAN NAMA USERS KE MYSQL KITA.

    ####################################################################################################################

    // * SETELAH KITA BUAT SEBUAH TABLE DENGAN MENGGUNAKAN MIGRATION TERSEBUT. MAKA LARAVEL AKAN MEMBUATKAN SEBUAH FILE DIDALAM 
    // Todo FOLDER database/migration/namaFile.
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

    // ! NOTE :
    // * Default bawaan isi methodnya seperti diatas. Jika kita ingin menambahkan field sesuai kebutuhan kita maka kita bisa menambahkan sebuah field ditengah-tengah field default / bawaannya tersebut. dan kita bisa memodif di bagian tengah itu hanya untuk pertama kali kita membuat migration 

    EXAMPLE : 
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('email', 50)->unique(); // FUNGSI UNIQUE INI BERGUNA UNTUK MENYURUH USER MEMASUKAN EMAIL DENGAN UNIK
            $table->string('password');
            $table->string('address')->nullable()->default(null);
            $table->timestamps();
        });
    }

    // FUNGSI NULLABLE() YAITU UNTUK JIKA USER TIDAK MENGISIKAN FORM MAKA KOSONG.


    // * SETELAH SELESAI KITA MEMBUAT TAMBAHAN FIELDNYA LALU KITA JALANKAN MIGRATIONNYA DENGAN CARA BERIKUT.
    // * EXAMPLE : 
    php artisan migrate 

    ########################################################################################################################





    #########################################################################################################################
    #########################################################################################################################
    // * DAN JIKA KITA INGIN MENGANTI NAMA COLUM PADA MIGRATION KITA BISA MENULIS DAN MEMBUAT SEBUAL MIGRATION BARU.

    // * EXAMAPLE :
    // * MEMBUAT SEBUAH MIGRATION UNTUK MENGGANTI NAMA COLUM 
    php artisan make:migration rename_phone_on_users --table=users

    // * LALU DIDALAM FILE MIGRATION TERSEBUT KITA BISA MEMANGGIL FUNGSI YAITU :  
    $table->renameColumn('from', 'to');


    // * EXAMPLE: 
    // * DIDALAM FUNCTION UP dan DOWN: 
    public function up() 
    {
        Schema::table('users', function(Blueprint $table) {
            $table->renameColumn('phone', 'phone_number');
        });
    }


    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->renameColumn('phone_number', 'phone');
        });
    }
