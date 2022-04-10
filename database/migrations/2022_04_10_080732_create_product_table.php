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
            $table->string('name')->nullable(false);
            $table->enum('gender', ['male', 'female']);
            $table->double('price')->default(0);
            $table->string('description')->nullable(true);
            $table->string('image')->default('no-image.png');
            $table->boolean('hit')->default(0);
            $table->string('slug')->nullable(false);
            $table->foreignId('category_id')->constrained();
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
