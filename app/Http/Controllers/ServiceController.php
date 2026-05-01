<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;
use App\Models\Service;
use Illuminate\Http\Request;


#[OA\Info(title: "Aders-Zero-API", version: "1.0.0")]
class ServiceController extends Controller
{

    #[OA\Get(path: "/api/test", responses: [new OA\Response(response: 200, description: "OK")])]
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
