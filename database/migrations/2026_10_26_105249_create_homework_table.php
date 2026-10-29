<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('homework', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('project_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('jiri_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('criteria_id')->constrained()->cascadeOnDelete();
            $table->integer('weighting');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homework');
    }
};
