<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "setmenu_id",
        "item_id",
        "address"
    ];
    public function setmenu()
    {
        return $this->belongsTo(Setmenu::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
