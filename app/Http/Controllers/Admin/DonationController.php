<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::latest()->paginate(10);
        return view('admin.donations.index' , compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.donations.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'total_amount'=>'required',
            'category_id'=>'required'
        ]);
        Donation::create([
            'name'=>$request->name,
            'total_amount'=>$request->total_amount,
            'category_id'=>$request->category_id,
            'collected_amount'=>0,
            'remaining_amount'=>$request->total_amount,
            'start_date'=>Carbon::now(),
            'description'=>$request->description
        ]);

        // alert()->success('با موفقیت انجام شد','دسته بندی با موفقیت اضافه شد');
        return redirect()->route('admin.donations.index');
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
    public function edit(Donation $donation)
    {
        $categories = Category::all();
        return view('admin.donations.edit' , compact('donation' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        {
            $request->validate([
                'name'=>'required',
                'total_amount'=>'required',
                'category_id'=>'required',
                'collected_amount'=>'required',
                'remaining_amount'=>'required',
                'start_date'=>'required'
            ]);
            $donation->update([
                'name'=>$request->name,
                'total_amount'=>$request->total_amount,
                'category_id'=>$request->category_id,
                'collected_amount'=>0,
                'remaining_amount'=>$request->total_amount,
                'start_date'=>Carbon::now(),
                'end_date'=>Carbon::now()->addYear(),
                'description'=>$request->description
            ]);

            // alert()->success('با موفقیت انجام شد','دسته بندی با موفقیت اضافه شد');
            return redirect()->route('admin.donations.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index');
    }
}
