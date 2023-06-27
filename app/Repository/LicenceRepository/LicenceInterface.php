<?php

namespace App\Repository\LicenceRepository;
use Illuminate\Http\Request;

interface LicenceInterface
{

    public function index();
    
    public function get_all();
    
    public function get_one($id);

    public function create(Request $request);

    public function request(Request $request);
    
}