<?php

namespace App\Http\Controllers;

use App\Repository\LicenceRepository\LicenceInterface;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    private $repository;

    public function __construct(LicenceInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $licenses = $this->repository->get_all();
        return response()->json($licenses);
    }

    public function Create(Request $request)
    {
        $request->validate([
            'admin_email' => "string | required",
            'number_of_licence' => "string | required"
        ]);
        $request['app_id'] = App\Helper\Helper::class->app_id_generator();
        dd($request);

        $response = $this->repository->create($request);
        return response()->json($response);
    }

    public function show($id)
    {
        $license = $this->repository->get_one($id);
        return response()->json($license);
    }

    public function request(Request $request)
    {
        $request->validate([
            'operator_name' => "string | required",
            'operator_email' => "string | required",
            'operator_phone' => "string | required",
            'request_license' => "string | required",
            'app_username' => "string | required",
            'app_employee_number' => "string",
        ]);

        $response = $this->repository->request($request);
        return response()->json($response);
    }
}
