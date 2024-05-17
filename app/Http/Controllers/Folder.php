<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\CacheHelper;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\FolderResource;

class Folder extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     $folders = CacheHelper::getCachedData('folders', function () {
        //         return Folder::with('documents')->get();
        //     }); 
        //     return $this->jsonResponse(FolderResource::collection($folders), 'Success', 200);
        // } catch (\Throwable $th) {
        //     Log::error($th);
        //     return $this->jsonResponse(null, "Failed", 400);
        // }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
