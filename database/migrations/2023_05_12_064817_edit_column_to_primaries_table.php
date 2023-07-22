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
        Schema::table('primaries', function (Blueprint $table) {
            DB::statement('ALTER TABLE `primaries` MODIFY `sec1_img` JSON NULL;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('primaries', function (Blueprint $table) {
            // DB::statement('ALTER TABLE `templates` MODIFY `body` VARCHAR(100) NULL;');
        });
    }
};
