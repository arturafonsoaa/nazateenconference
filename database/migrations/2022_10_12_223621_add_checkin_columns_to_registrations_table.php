<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->boolean('present_on_the_first_day')->nullable();
            $table->boolean('present_on_the_second_day')->nullable();
        });
    }

    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('present_on_the_first_day');
            $table->dropColumn('present_on_the_second_day');
        });
    }
};
