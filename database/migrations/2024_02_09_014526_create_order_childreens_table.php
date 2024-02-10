<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_childreens', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("order_id")->nullable();
            $table->string("name")->nullable();
            $table->string("relative_relation")->nullable();
            $table->string("id_number")->nullable();
            $table->string("birth_date")->nullable();
            $table->string("salary")->nullable();
            $table->string("is_orphan")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_childreens');
    }
};
