<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Gate;

use Xcholars\Support\Proxies\Auth;

use App\Models\Enquiry;

class EnquiryController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('enquiry', $request))
        {
            return $error;
        }

        Enquiry::create($request->all());

        return $response->withSuccess('Enquiry submitted');
    }

    public function show(Request $request, Response $response)
    {

        if ($id = $request->enquiry_id)
        {
            $enquiry = ['enquiry' => Enquiry::find($id)];

            if (Gate::allows('view-admin-content'))
            {
                return $response->withView('admin/enquiry', $enquiry);
            }

            return $response->withView('client/enquiry', $enquiry);
        }

        if (Gate::allows('view-admin-content'))
        {
            return $response->withView(
                'admin/enquiries',
                ['enquiries' => Enquiry::all()]
            );
        }

        return $response->withView(
            'client/enquiries',
            ['enquiries' => Auth::user()->enquiry]
        );

    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('enquiry', $request))
        {
            return $error;
        }

        Enquiry::find($request->enquiry_id)->update($request->all());

        return $response->withSuccess('Enquiry updated');
    }


}
