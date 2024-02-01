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
        Schema::table("portfolios", function (Blueprint $table) {

            $table->unsignedBigInteger("type_id")->nullable()->after("id");

            $table->foreign("type_id")->references("id")->on("types")->nullOnDelete();

            // $table->foreignId("type_id")->nullable->costrained()->nullOnDelete();    --->   VERSIONE COMPATTA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("portfolios", function (Blueprint $table) {
            $table->dropForeign("portfolios_category_id_foreign");
            $table->dropForeign("portfolios_id");
        });
    }
};
