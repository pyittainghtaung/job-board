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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');

            // This means add user_id as foreign key in employers table add user_id colum
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->timestamps();
        });

        Schema::table('jobs', function (Blueprint $table) {
            // The Below Line refers to add employer_id as foreign key in the jobs table
            //Add Nullable because not all user is employer
            $table->foreignIdFor(\App\Models\Employer::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Employer::class);
        });
        Schema::dropIfExists('employers');
    }
};
