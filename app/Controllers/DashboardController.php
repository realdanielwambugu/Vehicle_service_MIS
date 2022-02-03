<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

// use Xcholars\Support\Proxies\Auth;
//
// use App\Models\User;

class DashboardController extends Controller
{
    // use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        // if ($error = $this->isInvalid('login', $request))
        // {
        //     return $error;
        // }

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView('admin/dashboard');
        }

        return $response->withView('client/dashboard');

    }

}
