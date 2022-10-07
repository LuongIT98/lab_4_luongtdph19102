<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function getDashboard()
    {
        $viewName = 'dashboard';
        $data = [];
        return $this->render($viewName, $data);
    }
}