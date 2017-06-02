<?php

namespace Adrenth\Redirect\Updates;

use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

/**
 * Class AddSystemFieldToRedirectsTable
 *
 * @package Adrenth\Redirect\Updates
 */
class AddSystemFieldToRedirectsTable extends Migration
{
    public function up()
    {
        Schema::table('adrenth_redirect_redirects', function (Blueprint $table) {
            $table->boolean('system')
                ->default(false)
                ->after('publish_status');
        });
    }

    public function down()
    {
        Schema::table('adrenth_redirect_redirects', function (Blueprint $table) {
            $table->dropColumn('system');
        });
    }
}
