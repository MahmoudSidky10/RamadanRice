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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_type_id')->default(1); // 1- admin, 2- user , 3- employee
            $table->string('otp')->nullable();
            $table->string("mobile")->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();

            // employee info
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();

            // user info
            $table->string("printed_by")->nullable(); // id for user
            $table->string("created_by")->nullable(); // id for creator
            $table->string("id_number")->nullable();
            $table->string("register_number", 6)->default(rand(111111, 999999));
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
