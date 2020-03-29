<?php namespace Cb\Linez\Controllers;

use BackendMenu;
use Response;
use Backend\Classes\Controller;
use Cb\Linez\Models\HairColor;

/**
 * Hair Colors Back-end Controller
 */
class HairColors extends Controller
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

        BackendMenu::setContext('Cb.Linez', 'linez', 'haircolors');
    }

    public function getHairColors()
    {
        return Response::json(array(
            'status'    => 'Success',
            'code'      =>  200,
            'data'   =>  HairColor::all('color')->toArray()
        ), 200);
    }
}
