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
        Schema::table('requests', function (Blueprint $table) {
            $table->id();
            $table->string("admin_email");
            $table->string("operator_name");
            $table->string("operator_email");
            $table->string("operator_phone");
            $table->string("request_license");
            $table->string("app_username");
            $table->string("app_employee_number");
            $table->tinyInteger("status")->unsigned()->default(0);
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
        Schema::table('requests', function (Blueprint $table) {
            Schema::dropIfExists('requests');
        });
    }
};
