<?php namespace Pixinside\Navigation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixinsideNavigation2 extends Migration
{
    public function up()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->string('expand');
            $table->string('color');
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->dropColumn('expand');
            $table->dropColumn('color');
            $table->dropColumn('type');
        });
    }
}
