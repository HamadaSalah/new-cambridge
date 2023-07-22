<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::table('m_y_p_s', function (Blueprint $table) {
            DB::statement('ALTER TABLE `m_y_p_s` MODIFY `sec5_img` JSON NULL;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_y_p_s', function (Blueprint $table) {
            // DB::statement('ALTER TABLE `templates` MODIFY `body` VARCHAR(100) NULL;');
        });
    }
};
