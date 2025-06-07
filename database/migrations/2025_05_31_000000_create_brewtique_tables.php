<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ProductCategory', function (Blueprint $table) {
            $table->increments('ProdCatCode');
            $table->string('CategoryName', 100);
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
            $table->bigIncrements('cartID'); // Add autoincrement primary key
            $table->string('ImagePath', 255)->nullable();
            $table->string('ProductName', 255)->nullable();
            $table->decimal('ProdPrice', 8, 2)->nullable();
            $table->string('CupSize', 255)->nullable();
            $table->decimal('CupSizePrice', 10, 2)->nullable();
            $table->string('Milk', 255)->nullable();
            $table->decimal('MilkPrice', 10, 2)->nullable();
            $table->string('Addon', 255)->nullable();
            $table->decimal('AddonPrice', 10, 2)->nullable();
            $table->integer('Quantity')->default(1);
            $table->decimal('TotalPrice', 10, 2)->nullable();
            $table->timestamp('AddedAt')->nullable();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('Cart');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('ProductCategory');
    }
};
