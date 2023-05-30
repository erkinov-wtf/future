<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('navogation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->string('title');
            $table->string('link')->default('0');
            $table->string('icon')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('navogation');
    }
};
