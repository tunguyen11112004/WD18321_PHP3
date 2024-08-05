<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //php artisan migrate
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->float('price', 8, 2);
            $table->timestamps();// created_at | updated_at
            $table->string('image', 250)->nullable();
        });
    }

    //php artisan migrate:rollback | reset
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
