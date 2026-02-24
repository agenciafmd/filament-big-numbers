<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('big_numbers', static function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')
                ->default(true)
                ->unsigned()
                ->index();
            $table->string('big_number');
            $table->string('description');
            $table->integer('sort')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
