<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
	

class Profile extends Model
{
    //

protected $table = 'Profiles';

   public  $timestamps = false;
    protected $guarded = ['id'];
protected $fillable = ['email','name','password'];
}
