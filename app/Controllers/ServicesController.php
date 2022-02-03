<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Service;

class ServicesController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('service', $request))
        {
            return $error;
        }

        $service = new Service;

        $service->create(
            array_merge(
                $request->all(),
                ['photo' => $service->upload_photo()]
            )
        );

        return $response->withSuccess('Service added');
    }

    public function show(Request $request, Response $response)
    {
        if ($id = $request->service_id)
        {
            return $response->withView(
                'admin/service',
                ['service' => Service::find($id)]
            );
        }

        $services = ['services' => Service::all()];

        if (auth()->check())
        {
            if (Gate::allows('view-admin-content'))
            {
                return $response->withView('admin/services', $services);
            }
        }

        return $response->withView('services', $services);
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('service', $request))
        {
            return $error;
        }

        Service::find($request->service_id)->update($request->all());

        return $response->withSuccess('Service updated');
    }

    public function delete(Request $request, Response $response)
    {
        $service = Service::find($request->service_id);

        unlink(upload_path('images/service\\'.$service->photo));

        $service->delete();

        return $response->withRedirect('/services');
    }
}
