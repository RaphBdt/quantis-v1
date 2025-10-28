<?php

use App\Models\Scenario;
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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->decimal('net_worth', 19)->default(0);
            $table->decimal('yield', 5)->default(0);
            $table->decimal('monthly_investment', 19)->default(0);
            $table->decimal('monthly_rent', 19)->default(0);
            $table->foreignIdFor(Scenario::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
