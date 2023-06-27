<?php

namespace App\Repository\LicenceRepository;
use Illuminate\Http\Request;

class LicenceRepository implements LicenceInterface
{
    public function index()
    {
        return "Server is live";
    }

    public function get_all()
    {
        return Licence::OrderBy("updated_at", "desc");
    }
    
    public function get_one($id)
    {
        return Licence::find($id);
    }

    public function create(Request $request)
    {
        return $request->create($request);
    }

    public function request(Request $request)
    {
        return $request->create($request);
    }

}