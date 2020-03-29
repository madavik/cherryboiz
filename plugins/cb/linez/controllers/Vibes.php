<?php namespace Cb\Linez\Controllers;

use BackendMenu;
use Response;
use Backend\Classes\Controller;
use Cb\Linez\Models\Vibe;

/**
 * Vibes Back-end Controller
 */
class Vibes extends Controller
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

        BackendMenu::setContext('Cb.Linez', 'linez', 'vibes');
    }

    public function getVibes()
    {
        return Response::json(array(
            'status'    => 'Success',
            'code'      =>  200,
            'data'   =>  Vibe::all('vibe')->toArray()
        ), 200);
    }
}
