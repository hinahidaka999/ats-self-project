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
        if (!Schema::hasTable('applicants')) {
            Schema::create('applicants', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100)->nullable();
                $table->integer('age', false)->nullable();
                $table->integer('occupation', false);
                $table->integer('application_route', false);
                $table->string('current_affiliation', 100)->nullable();
                $table->string('final_education', 100)->nullable();
                $table->integer('tel', false)->nullable();
                $table->string('email', 100)->nullable();
                $table->string('resume', 100)->nullable();
                $table->string('cv', 100)->nullable();
                $table->string('other_file', 100)->nullable();
                $table->text('career')->nullable();
                $table->string('link', 100)->nullable();
                $table->text('memo')->nullable();
                $table->timestamps();
                $table->softDeletes($column = 'deleted_at', $precision = 0);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
