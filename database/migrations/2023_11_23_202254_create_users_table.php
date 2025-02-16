<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');// Integer Unsigned Increment
            $table->string('name', 20)->nullable(false);// varchar
            $table->string('last_name',50);
            $table->string('email')->unique();// Evita repetir el dato
            $table->timestamp('email_verified_at')->nullable();// Cuando se le pase un campo que debe de quedar vacio, se debe de aplicar la propiedad "nullable()"
            $table->string('avatar');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
