<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('responsible');
            $table->string('staff');
            $table->string('pateint');
            $table->string('error');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
