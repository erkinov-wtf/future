<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('age')->nullable()->after('patient_name');
            $table->unsignedTinyInteger('gender')->nullable()->after('age');
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
};
