<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMessageTableAddWxSent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('message') && !Schema::hasColumn('message', 'wx_sent')) {
            Schema::table('message', function (Blueprint $table) {
                $table->boolean('wx_sent')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('message') && Schema::hasColumn('message', 'wx_sent')) {
            Schema::table('message', function (Blueprint $table) {
                $table->dropColumn(['wx_sent']);
            });
        }
    }
}
