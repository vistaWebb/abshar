<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::latest()->paginate(10);
        return view('admin.donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('parent_id', '>', 0)->get();
        return view('admin.donations.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'total_amount' => 'required',
            'category_id' => 'required',
            // 'image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);
        try {
            DB::beginTransaction();
            $fileNameImage = $this->upload($request->image);

            Donation::create([
                'name' => $request->name,
                'total_amount' => $request->total_amount,
                'category_id' => $request->category_id,
                'collected_amount' => 0,
                'remaining_amount' => $request->total_amount,
                'description' => $fileNameImage,
                'start_date' => Carbon::now(),
            ]);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()
                ->error('  مشکل در ایجاد دونیت  ', $ex->getMessage())
                ->persistent('حله');
            return redirect()->back();
        }

        alert()->success('با تشکر', 'دونیت  با موفقیت اضافه شد');
        return redirect()->route('admin.donations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        return view('admin.donations.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        $categories = Category::all();
        return view('admin.donations.edit', compact('donation', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'name' => 'required',
            'total_amount' => 'required',
            'category_id' => 'required',
            'collected_amount' => 'required',
            'remaining_amount' => 'required',
            'start_date' => 'required',
        ]);

        if ($request->description == $donation->description) {
            $donation->update([
                'name' => $request->name,
                'total_amount' => $request->total_amount,
                'category_id' => $request->category_id,
                'collected_amount' => 0,
                'remaining_amount' => $request->total_amount,
                'description' => $donation->description,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear(),
            ]);

            alert()->success('با تشکر', 'دونیت  با موفقیت ویرایش شد');
            return redirect()->route('admin.donations.index');
        } else {
            try {
                DB::beginTransaction();

                $fileNameImage = $this->upload($request->description);

                $donation->update([
                    'name' => $request->name,
                    'total_amount' => $request->total_amount,
                    'category_id' => $request->category_id,
                    'collected_amount' => 0,
                    'remaining_amount' => $request->total_amount,
                    'description' => $fileNameImage,
                    'start_date' => Carbon::now(),
                    'end_date' => Carbon::now()->addYear(),
                ]);

                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                alert()
                    ->error('  مشکل در ویرایش  دونیت ', $ex->getMessage())
                    ->persistent('حله');
                return redirect()->back();
            }

            alert()->success('با تشکر', 'دونیت  با موفقیت ویرایش شد');
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

    function upload($image)
    {
        $fileNameImage = $this->generateFileName($image->getClientOriginalName());

        $image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNameImage);

        return $fileNameImage;
    }

    function generateFileName($name)
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $hour = Carbon::now()->hour;
        $minute = Carbon::now()->minute;
        $second = Carbon::now()->second;
        $microsecond = Carbon::now()->microsecond;

        return $year . '-' . $month . '-' . $day . '-' . $hour . '-' . $minute . '-' . $second . '-' . $microsecond . $name;
    }
}
