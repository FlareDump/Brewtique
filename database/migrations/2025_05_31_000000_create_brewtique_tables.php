<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ProductCategory', function (Blueprint $table) {
            $table->increments('ProdCatCode');
            $table->string('CategoryName', 100);
        });

        Schema::create('Milk', function (Blueprint $table) {
            $table->increments('MilkCode');
            $table->string('MilkName', 100);
            $table->decimal('MilkPrice', 10, 2);
        });

        Schema::create('Addon', function (Blueprint $table) {
            $table->increments('AddonCode');
            $table->string('AddonName', 100);
            $table->decimal('AddonPrice', 10, 2);
        });

        Schema::create('Product', function (Blueprint $table) {
            $table->increments('ProdCode');
            $table->string('ProdName', 100);
            $table->integer('ProdCatCode')->unsigned()->nullable();
            $table->integer('Stock')->default(0);
            $table->decimal('ProdPrice', 10, 2);
            $table->string('ImagePath', 255)->nullable();
            $table->foreign('ProdCatCode')->references('ProdCatCode')->on('ProductCategory');
        });

        Schema::create('Cart', function (Blueprint $table) {
            $table->increments('CartID');
            $table->integer('UserID')->nullable();
            $table->integer('ProdCatCode')->unsigned()->nullable();
            $table->decimal('ProdPrice', 10, 2)->nullable();
            $table->integer('MilkCode')->unsigned()->nullable();
            $table->decimal('MilkPrice', 10, 2)->nullable();
            $table->integer('AddonCode')->unsigned()->nullable();
            $table->decimal('AddonPrice', 10, 2)->nullable();
            $table->integer('Quantity');
            $table->string('Size', 50)->nullable();
            $table->decimal('SizePrice', 10, 2)->nullable();
            $table->dateTime('AddedAt')->useCurrent();
            $table->foreign('ProdCatCode')->references('ProdCatCode')->on('ProductCategory');
            $table->foreign('MilkCode')->references('MilkCode')->on('Milk');
            $table->foreign('AddonCode')->references('AddonCode')->on('Addon');
        });

        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->dateTime('OrderDate')->useCurrent();
        });

        Schema::create('OrderItems', function (Blueprint $table) {
            $table->increments('OrderItemID');
            $table->integer('OrderID')->unsigned();
            $table->integer('ProdCatCode')->unsigned()->nullable();
            $table->decimal('ProdPrice', 10, 2)->nullable();
            $table->integer('MilkCode')->unsigned()->nullable();
            $table->decimal('MilkPrice', 10, 2)->nullable();
            $table->integer('AddonCode')->unsigned()->nullable();
            $table->decimal('AddonPrice', 10, 2)->nullable();
            $table->integer('Quantity');
            $table->string('Size', 50)->nullable();
            $table->decimal('SizePrice', 10, 2)->nullable();
            $table->foreign('OrderID')->references('OrderID')->on('Orders');
            $table->foreign('ProdCatCode')->references('ProdCatCode')->on('ProductCategory');
            $table->foreign('MilkCode')->references('MilkCode')->on('Milk');
            $table->foreign('AddonCode')->references('AddonCode')->on('Addon');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('OrderItems');
        Schema::dropIfExists('Orders');
        Schema::dropIfExists('Cart');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('Addon');
        Schema::dropIfExists('Milk');
        Schema::dropIfExists('ProductCategory');
    }
};
