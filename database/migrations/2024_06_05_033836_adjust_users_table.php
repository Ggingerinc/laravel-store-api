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
        Schema::table("users", function (Blueprint $table) {
            $table->string("username")->unique();
            $table->string("roles");
            $table->text("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("avatar")->nullable();
            $table->enum("status", ["ACTIVE", "INACTIVE"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("users", function (Blueprint $table) {
            $table->dropColumn(['username', "roles", "address", "phone", "avatar", "status"]);
        });
    }
};
