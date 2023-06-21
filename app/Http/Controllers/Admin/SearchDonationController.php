<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchDonationController extends Controller
{
    public function searchDonation(Request $request)
    {
        $keyword = $request->search;
        $donations = Donation::where('name' , 'LIKE' , '%'.$keyword.'%')->paginate(3);

        return view('admin.donations.index', compact('donations'));
    }
}
