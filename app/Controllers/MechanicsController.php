<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use App\Models\Mechanic;

class MechanicsController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('mechanic', $request))
        {
            return $error;
        }

        $mechanic = new Mechanic;

        $mechanic->create(
            array_merge(
                $request->all(),
                ['photo' => $mechanic->upload_photo()]
            )
        );

        return $response->withSuccess('Mechanic added');
    }

    public function show(Request $request, Response $response)
    {
        if ($id = $request->mechanic_id)
        {
            return $response->withView(
                'admin/mechanic',
                ['mechanic' => Mechanic::find($id)]
            );
        }

        $mechanics = ['mechanics' => Mechanic::all()];

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView('admin/mechanics', $mechanics );
        }

        return $response->withView('about', $mechanics);
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('mechanic', $request))
        {
            return $error;
        }

        Mechanic::find($request->mechanic_id)->update($request->all());

        return $response->withSuccess('Mechanic updated');
    }

    public function delete(Request $request, Response $response)
    {
        $mechanic = Mechanic::find($request->mechanic_id);

        unlink(upload_path('images/mechanic\\'.$mechanic->photo));

        $mechanic->delete();

        return $response->withRedirect('/mechanics');
    }
}
