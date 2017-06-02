<?php

namespace Adrenth\Redirect\Updates;

use DB;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

/**
 * Class ChangeTypeUrlColumnsRedirectsTable
 *
 * @package Adrenth\Redirect\Updates
 */
class ChangeTypeUrlColumnsRedirectsTable extends Migration
{
    public function up()
    {
        Schema::table('adrenth_redirect_redirects', function (Blueprint $table) {
            $table->mediumText('to_url')
                ->change();
            $table->mediumText('from_url')
                ->change();
            $table->string('match_type', 12)
                ->change();
        });
    }

    public function down()
    {
        Schema::table('adrenth_redirect_redirects', function (Blueprint $table) {
            $table->string('to_url')
                ->change();
            $table->string('from_url')
                ->change();
        });
    }
}
