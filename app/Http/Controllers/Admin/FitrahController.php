<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hekmatinasser\Verta\Facades\Verta;

class FitrahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fitrahs = Transaction::where('category_id' , 1)->get();

        $vWeek = verta()->subWeek();
        $lastWeek =Verta::parse($vWeek)->datetime();
        $week = Transaction::where('category_id' , 1)->where('created_at' , '>' , $lastWeek)->get();

        $vMonth = verta()->subMonth();
        $lastMonth =Verta::parse($vMonth)->datetime();
        $month = Transaction::where('category_id' , 1)->where('created_at' , '>' , $lastMonth)->get();

        $vYear = verta()->subYear();
        $lastYear =Verta::parse($vYear)->datetime();
        $year = Transaction::where('category_id' , 1)->where('created_at' , '>' , $lastYear)->get();

        $sumWeek = 0 ;
        foreach ($week as $w) {
            $sumWeek+= $w->amount;
        }

        $sumMonth = 0 ;
        foreach ($month as $w) {
            $sumMonth+= $w->amount;
        }

        $sumYear = 0 ;
        foreach ($year as $w) {
            $sumYear+= $w->amount;
        }
        $totalAmount = 0 ;
        foreach ($fitrahs as $w) {
            $totalAmount+= $w->amount;
        }


        return view('admin.fitrahs.index' , compact('fitrahs' , 'sumWeek' , 'sumMonth' , 'sumYear' , 'totalAmount'));
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
