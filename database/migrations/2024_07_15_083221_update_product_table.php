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
        Schema::table('product', function (Blueprint $table) {
            $table->string('name', 250)->change();
            // $table->renameColumn('price', 'product_price');
            $table->string('votes', 20);
            $table->renameColumn('price', 'product_price');

        });
    }

    public function down(): void
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('name', 250)->change();
            // $table->renameColumn('price', 'product_price');
            $table->string('votes', 20);
            $table->renameColumn('product_price', 'price');

        });
    }
};
