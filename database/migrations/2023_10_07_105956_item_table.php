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
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code')->unique()->index();
            $table->string('item_name')->nullable()->index();
            $table->string('item_descript')->nullable();
            $table->decimal('item_price',12,2)->default(0)->nullable();
            $table->integer('ro_level')->nullable()->default(0);
            $table->integer('cur_quantity')->nullable()->default(0);
            $table->date('updated_date')->nullable();
            $table->string('updated_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
