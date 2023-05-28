<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addjobs', function (Blueprint $table) {
            $table->id();
            $table->tinyText('job_title');
            $table->tinyText('No_of_post');
            $table->tinyText('department');
            $table->tinyText('district');
            $table->tinyText('description');
            $table->tinyText('edu_qualification');
            // $table->tinyText('experience');
            $table->tinyText('salary');
            $table->tinyText('job_type');
            $table->tinyText('date_of_sub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addjobs');
    }
};
