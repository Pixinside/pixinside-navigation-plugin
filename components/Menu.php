<?php namespace Pixinside\Navigation\Components;

use Cms\Classes\ComponentBase;
use Pixinside\Navigation\Models\Navigation as MenuModel;

class Menu extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Menu',
            'description' => 'Add a menu'
        ];
    }
    public function onStatusChange() {
       Flash::success('youpi!');
        }

    public function defineProperties(){
        return [
	        'menuId' => [
                'title'   => 'Menu',
                'type'    => 'dropdown',
                'default' => ''
            ],
        ];
    }
    public function getmenuIdOptions(){

        return MenuModel::orderBy('title')->lists('title', 'id');

    }


        public function onRun(){
        $this->menu = $this->loadMenu();

    }

    protected function loadMenu(){
	    $menu = $this->property('menuId');

        $query = MenuModel::find($menu)->get();


        return $query;
    }

    public $menu;



}
