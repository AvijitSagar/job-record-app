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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_record_id');
            $table->boolean('contacted_yet')->default(0)->comment('0=no, 1=yes');
            $table->date('contacted_on');
            $table->string('contacted_via');
            $table->date('viva_date');
            $table->time('viva_time');
            $table->string('email_or_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
