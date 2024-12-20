<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            if (!Schema::hasColumn('courses', 'duration')) {
                $table->string('duration')->after('price');
            }
            if (!Schema::hasColumn('courses', 'level')) {
                $table->string('level')->after('duration');
            }
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['duration', 'level']);
        });
    }
}; 