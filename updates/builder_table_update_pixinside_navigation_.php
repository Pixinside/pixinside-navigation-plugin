<?php namespace Pixinside\Navigation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixinsideNavigation extends Migration
{
    public function up()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
