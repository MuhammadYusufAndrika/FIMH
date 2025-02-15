<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('beritaacaras', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('beritaacaras');
    }
};
