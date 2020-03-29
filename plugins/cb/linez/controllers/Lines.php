<?php namespace Cb\Linez\Controllers;

use BackendMenu;
use Input;
use Response;
use Backend\Classes\Controller;
use Cb\Linez\Models\Line;
use Cb\Linez\Models\HairColor;
use Cb\Linez\Models\Location;
use Cb\Linez\Models\Vibe;

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
        $v = Input::get('vibe');
        $l = Input::get('location');
        $h = Input::get('haircolor');
        $vibe = Vibe::where('vibe', $v)->first();
        $location = Location::where('location', $l)->first();
        $hair = HairColor::where('color', $h)->first();
        if($vibe && $location && $hair){
            $lines = Line::whereHas('vibes', function($q) use($vibe){
                $q->where('vibe', $vibe->vibe);
            })->whereHas('locations', function($q) use($location){
                $q->where('location', $location->location);
            })->whereHas('haircolors', function($q) use($hair){
                $q->where('color', $hair->color);
            })->get()->toArray();
            $line = $lines[array_rand($lines)];
            return Response::json(array(
                'status'    => 'Success',
                'code'      =>  200,
                'data'   =>  $line['line']
            ), 200);
        }
        return Response::json(array(
            'status'    => 'Error',
            'code'      =>  400,
            'message'   =>  'Bad Request'
        ), 401);
    }
}
