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
            $table->string('role')->after('parent_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('navigation', function (Blueprint $table) {
            $table->dropColumn('admin');
        });
    }
};
