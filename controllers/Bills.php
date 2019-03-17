<?php namespace Jc91715\Bill\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Bills Back-end Controller
 */
class Bills extends Controller
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

        BackendMenu::setContext('Jc91715.Bill', 'bill', 'bills');
    }
}
