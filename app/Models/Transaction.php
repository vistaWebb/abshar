<?php

namespace App\Models;

use App\Models\User;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transaction";
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
