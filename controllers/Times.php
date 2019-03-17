<?php namespace Jc91715\Bill\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Times Back-end Controller
 */
class Times extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        \Backend\Behaviors\RelationController::class,
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Jc91715.Bill', 'bill', 'times');
    }
}
