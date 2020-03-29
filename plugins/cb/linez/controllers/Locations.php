<?php namespace Cb\Linez\Controllers;

use BackendMenu;
use Response;
use Backend\Classes\Controller;
use Cb\Linez\Models\Location;

/**
 * Locations Back-end Controller
 */
class Locations extends Controller
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

        BackendMenu::setContext('Cb.Linez', 'linez', 'locations');
    }
    public function getLocations()
    {
        return Response::json(array(
            'status'    => 'Success',
            'code'      =>  200,
            'data'   =>  Location::all('location')->toArray()
        ), 200);
    }
}
