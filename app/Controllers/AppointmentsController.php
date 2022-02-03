<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Appointment;

class AppointmentsController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('appointment', $request))
        {
            return $error;
        }

        Appointment::create($request->all());

        return $response->withSuccess('appointment submitted');
    }

    public function show(Request $request, Response $response)
    {
        if ($id = $request->appointment_id)
        {
            $appointment = ['appointment' => Appointment::find($id)];

            if (Gate::allows('view-admin-content'))
            {
                return $response->withView('admin/appointment', $appointment);
            }

            return $response->withView('client/appointment', $appointment);

        }

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
                'admin/appointments',
                ['appointments' => Appointment::all()]
            );
        }

        return $response->withView(
            'client/appointments',
            ['appointments' => Auth::user()->appointment]
        );

    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('appointment', $request))
        {
            return $error;
        }

        Appointment::find($request->appointment_id)->update($request->all());

        return $response->withSuccess('appointment updated');
    }


}
