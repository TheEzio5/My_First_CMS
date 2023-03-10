<?php

namespace Modules\Roby\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class RobiesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Robies';

        // module name
        $this->module_name = 'robies';

        // directory path of the module
        $this->module_path = 'roby::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Roby\Models\Roby";
    }

}
