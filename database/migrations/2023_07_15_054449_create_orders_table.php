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
        //تمامی سفارشات کاربر
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('address_id')->nullable()->constrained('addresses')->onUpdate('cascade')->onDelete('cascade');
            //ادرس ابجکت یک نمونه از آدرس را در خود ذخیره میکند. برای مواقعی که کاربر ادرس خود را تغییر میدهد آدرس های قبلی که سفارشات او ارسال شده حذف نشود یعنی یک جایی ثبت شده باشد
            $table->longText('address_object')->nullable();
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('payment_object')->nullable();
            $table->tinyInteger('payment_type')->default(0);
            $table->tinyInteger('payment_status')->default(0);
            $table->foreignId('delivery_id')->nullable()->constrained('deliveries')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('delivery_object')->nullable();
            $table->decimal('delivery_amount',20, 3)->nullable();
            $table->tinyInteger('delivery_status')->default(0);
            $table->timestamp('delivery_date')->nullable();
            $table->decimal('order_final_amount',20, 3)->nullable();// مبلغ نهایی
            $table->decimal('order_discount_amount',20, 3)->nullable(); // مبلغ نهایی تخفیف
            $table->foreignId('copan_id')->nullable()->constrained('copans')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('copan_object')->nullable();
            $table->decimal('order_copan_discount_amount',20, 3)->nullable();// مقدار تخفیفی که کاربر با این کد تخفیف روی این سفارش به خصوص گرفته
            $table->foreignId('common_discount_id')->nullable()->constrained('common_discounts')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('common_discount_object')->nullable();
            $table->decimal('order_common_discount_amount',20, 3)->nullable();
            $table->decimal('order_total_products_discount_amount',20, 3)->nullable();
            $table->tinyInteger('order_status')->default(0);
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
        Schema::dropIfExists('orders');
    }
};
