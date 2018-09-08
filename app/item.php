<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    protected $table = 'items';

   public  $timestamps = false;
    protected $guarded = ['id'];
protected $fillable = ['description','item_name','seller_id','date','price','date','price','photos'];
}
