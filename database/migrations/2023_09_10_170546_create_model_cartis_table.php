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
        Schema::create('carti', function (Blueprint $table) {
            $table->id();
            $table->string("titlu");
            $table->string("autor");

            $table->unsignedBigInteger("gen_id");
            $table->index("gen_id", "carti_gen_idx");
            $table->foreign("gen_id", "carti_gen_fk")->on("genre")->references("id");

            $table->string("imagine")->nullable();

            $table->text("descriere");
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carti');
    }
};
