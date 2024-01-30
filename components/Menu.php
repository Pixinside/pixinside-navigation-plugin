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
        $menuId = $this->property('menuId');
    
        // Vérifiez d'abord si un menu avec l'ID donné existe
        $menu = MenuModel::find($menuId);
    
        // Si le menu existe, retournez-le, sinon retournez null ou un tableau vide
        if ($menu) {
            return $menu;
        } else {
            // Vous pouvez retourner null ou un tableau vide, selon la logique de votre application
            return null; // ou return [];
        }
    }
    

    public $menu;



}
