<?php namespace Pixinside\Navigation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePixinsideNavigation extends Migration
{
    public function up()
    {
        Schema::create('pixinside_navigation_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('navigation');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pixinside_navigation_');
    }
}
