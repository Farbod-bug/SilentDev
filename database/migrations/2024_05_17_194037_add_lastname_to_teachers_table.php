<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastnameToTeachersTable extends Migration
{

    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('last_name')->after('name');
        });
    }


    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            //
        });
    }
}
