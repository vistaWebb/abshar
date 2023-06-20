<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Comment;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hekmatinasser\Verta\Facades\Verta;

class DashboardController extends Controller
{
    public function index()
    {
        $lastWeek = $this->getTime('week');
        $lastMonth = $this->getTime('month');
        $lastYear = $this->getTime('year');

        $monthFitrahs = Order::where('category_id', 1)
            ->where('created_at', '>', $lastMonth)
            ->get();
        $fitrahs = $this->getTotal($monthFitrahs);

        $monthExpiations = Order::where('category_id', 2)
            ->where('created_at', '>', $lastMonth)
            ->get();
        $expiations = $this->getTotal($monthExpiations);

        $monthCharities = Order::where('category_id', 3)
            ->where('created_at', '>', $lastMonth)
            ->get();
        $charities = $this->getTotal($monthCharities);

        $totalWeek = Order::where('created_at', '>', $lastWeek)->get();
        $sumWeek = $this->getTotal($totalWeek);

        $totalMonth = Order::where('created_at', '>', $lastMonth)->get();
        $sumMonth = $this->getTotal($totalMonth);

        $totalYear = Order::where('created_at', '>', $lastYear)->get();
        $sumYear = $this->getTotal($totalYear);

        $donations = Donation::all();
        $transactions = Order::all();
        $comments = Comment::all();

        return view('admin.dashboard', compact('fitrahs', 'expiations', 'charities', 'sumWeek', 'sumMonth', 'sumYear' , 'donations' , 'transactions' , 'comments'));
    }

    function getTime($time)
    {
        if ($time == 'week') {
            $v = verta()->subWeek();
            $lastWeek = Verta::parse($v)->datetime();
            return $lastWeek;
        }
        if ($time == 'month') {
            $v = verta()->subMonth();
            $lastmonth = Verta::parse($v)->datetime();
            return $lastmonth;
        }
        if ($time == 'year') {
            $v = verta()->subYear();
            $lastYear = Verta::parse($v)->datetime();
            return $lastYear;
        }
    }

    function getTotal($items)
    {
        $sumItem = 0;
        foreach ($items as $item) {
            $sumItem += $item->amount;
        }
        return $sumItem;
    }
}
