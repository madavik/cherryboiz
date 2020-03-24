<?php namespace Cb\Linez\Controllers;

use BackendMenu;
use Input;
use Backend\Classes\Controller;
use Cb\Linez\Models\Line;

/**
 * Lines Back-end Controller
 */
class Lines extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Cb.Linez', 'linez', 'lines');
    }

    public function getLine()
    {
        $vibe = Input::get('vibe');
        $location = Input::get('location');
        $hairColor = Input::get('haircolor');
        dd($vibe, $location, $hairColor);
        return Line::all('line')->toJson();
    }
}
