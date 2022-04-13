<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('brand_id')->constrained();
            $table->string('name')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->double('price')->default(0);
            $table->enum('gender', ['male', 'female', 'kids']);
            $table->integer('discount')->default(0);
            $table->string('image')->default('no-image.png');
            $table->string('description')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
