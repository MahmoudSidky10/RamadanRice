<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamp('status_updated_at')->nullable();

            // Data of person :-
            $table->string("first_name")->nullable();
            $table->string("parent_name")->nullable();
            $table->string("grandfather_name")->nullable();
            $table->string("family_name")->nullable();

            $table->string("social_situation_id")->nullable();
            $table->string("birth_date")->nullable();
            $table->string("age")->nullable();
            $table->string("salary")->nullable();
            $table->string("nationality_id")->nullable(); // TODO :: Add Nationality Table
            $table->string("id_number")->nullable();
            $table->string("id_number_expiration_date")->nullable();
            $table->string("city")->nullable();
            $table->string("district")->nullable();
            $table->string("mobile")->nullable();
            $table->string("mobile2")->nullable();
            $table->string("children_number")->nullable();
            $table->string("is_special_case")->nullable();
            $table->string("special_case_type")->nullable(); // TODO :: Add Special Case Type Table

            $table->string("id_number_image")->nullable();
            $table->string("divorce_deed")->nullable();
            $table->string("husband_death_image")->nullable();
            $table->string("prisoner_family_identification_facility")->nullable();
            $table->string("attached_is_the_support_instrument")->nullable();
            $table->string("absher_facility")->nullable();
            $table->string("deed_ofـabandonment")->nullable();
            $table->string("other_attachments")->nullable();
            $table->string("other_attachments1")->nullable();
            $table->string("other_attachments2")->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
