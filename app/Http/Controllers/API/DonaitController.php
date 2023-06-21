<?php

namespace App\Http\Controllers\API;

use App\Models\Donation;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DonaitionResourcee;

class DonaitController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::all();
        return DonaitionResourcee::collection($donations);
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
