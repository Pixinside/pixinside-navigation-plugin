<?php namespace Pixinside\Navigation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePixinsideNavigation3 extends Migration
{
    public function up()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->string('navbarcolor', 255)->nullable();
            $table->string('bgcolor', 255)->nullable();
            $table->text('navigation')->nullable()->change();
            $table->string('title', 255)->nullable()->change();
            $table->string('expand', 255)->nullable()->change();
            $table->string('type')->nullable()->change();
            $table->dropColumn('color');
        });
    }
    
    public function down()
    {
        Schema::table('pixinside_navigation_', function($table)
        {
            $table->dropColumn('navbarcolor');
            $table->dropColumn('bgcolor');
            $table->text('navigation')->nullable(false)->change();
            $table->string('title', 255)->nullable(false)->change();
            $table->string('expand', 255)->nullable(false)->change();
            $table->string('type', 255)->nullable(false)->change();
            $table->string('color', 255);
        });
    }
}
