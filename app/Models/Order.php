<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $guarded = [];

    public function getStatusAttribute($status)
    {
        switch($status){
            case '0' :
                $status = 'ناموفق';
            break;
            case '1':
                $status = 'موفق';
            break;
        }
        return $status;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }

    // public function transaction()
    // {
    //     return $this->belongsTo(Transaction::class , 'order_id');
    // }
    public function transaction()
{
    return $this->belongsTo(Transaction::class , 'order_id');
}

}
