<?php namespace Pixinside\Navigation\Models;

use Model;
use Cms\Classes\Theme;
use Cms\Classes\Page;

/**
 * Model
 */
class Navigation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];


    public $translatable = ['title','navigation'];

    public $attachOne = [
        'logo' => 'System\Models\File'
    ];


    public $jsonable = ['navigation'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pixinside_navigation_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getCmspageOptions($value, $formData)
    {
        $currentTheme = Theme::getEditTheme();
        $pages = Page::listInTheme($currentTheme, true);

        $options = [];
        foreach ( $pages as $page )
            $options[$page->baseFileName] = $page->title . ' ('.$page->url.')';

        asort($options);

        $this->pages = $options;
        return $options;
    }

}
