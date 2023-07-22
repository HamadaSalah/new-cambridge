<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('i_b_d_p_s');

        Schema::create('i_b_d_p_s', function (Blueprint $table) {
            $table->id();
            
            $table->longText('sec1_head')->nullable();
            $table->longText('sec1_p')->nullable();
            $table->string('sec1_img')->nullable();

            $table->longText('sec2_head')->nullable();
            $table->longText('sec2_p')->nullable();
            $table->string('sec2_img')->nullable();

            $table->longText('sec3_head')->nullable();
            $table->longText('sec3_p')->nullable();
            $table->string('sec3_img')->nullable();

            $table->longText('sec4_head')->nullable();
            $table->longText('sec4_p')->nullable();
            $table->string('sec4_img')->nullable();

            $table->longText('sec5_head')->nullable();
            $table->longText('sec5_p')->nullable();
            $table->string('sec5_img')->nullable();

            $table->longText('sec6_head')->nullable();
            $table->longText('sec6_p')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_b_d_p_s');
    }
};
