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
        Schema::create('c_a_s', function (Blueprint $table) {
            $table->id();
            $table->longText('sec1_head')->nullable();
            $table->longText('sec1_p')->nullable();
            $table->string('sec1_img')->nullable();

            $table->longText('sec2_head')->nullable();
            $table->longText('sec2_p')->nullable();

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

            $table->longText('sec7_head')->nullable();
            $table->longText('sec7_p')->nullable();
            $table->string('sec7_img')->nullable();

            $table->longText('sec8_head')->nullable();
            $table->longText('sec8_p')->nullable();
            $table->string('sec8_img')->nullable();

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
        Schema::dropIfExists('c_a_s');
    }
};
