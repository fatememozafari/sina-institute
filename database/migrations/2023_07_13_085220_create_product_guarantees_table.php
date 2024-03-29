<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_guarantees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('price_increase', 20, 3)->default(0)->comment('با اضافه شدن گارانتی چقدر به قیمت محصول اضافه میشود');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_guarantees');
    }
};
