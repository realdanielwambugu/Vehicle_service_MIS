<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

class ProfileController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
                'admin/clients',
                ['users' => User::all()]
            );
        }

        return $response->withView('client/profile', ['user' => Auth::user()]);
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('profile', $request))
        {
            return $error;
        }

        Auth::user()->update($request->all());

        return $response->withSuccess('Profile updated');
    }

}
