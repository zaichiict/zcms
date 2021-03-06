<?php

namespace ZCMS\Backend\Menu;

use ZCMS\Core\ZModule;

/**
 * Class Module
 *
 * @package ZCMS\Backend\Menu
 */
class Module extends ZModule
{

    /**
     * Define module name
     *
     * @var string
     */
    protected $module_name = 'menu';

    /**
     * Module Constructor
     */

    public function __construct()
    {
        parent::__construct($this->module_name);
    }
}
