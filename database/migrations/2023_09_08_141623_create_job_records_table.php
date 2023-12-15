<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('company_name');
            $table->text('company_address');
            $table->integer('vacency')->nullable();
            $table->string('position');
            $table->date('applied_on');
            $table->date('application_deadline')->nullable();
            $table->string('application_process')->nullable();
            $table->string('useful_links')->nullable();
            $table->text('description')->nullable();
            $table->tinyText('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_records');
    }
};
