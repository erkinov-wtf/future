<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('navigation', function (Blueprint $table) {
            $table->string('link');
            $table->string('icon');
        });
    }

    public function down()
    {
        Schema::table('navigation', function (Blueprint $table) {
            //
        });
    }
};
