<?php namespace Pixinside\Navigation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixinsideNavigation4 extends Migration
{
    public function up()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->text('vertical_align')->nullable();
            $table->text('horizontal_align')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->dropColumn('vertical_align');
            $table->dropColumn('horizontal_align');
        });
    }
}
