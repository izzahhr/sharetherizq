<?php

namespace App;
use App\users;
use App\organizations;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    public $table="organizations";

    protected $fillable = [
        'organization_name','organiztion_email','organization_password','admin_id'
    ];

    protected $primaryKey = 'organization_id';

    public function users(){
        return $this->belongsTo(User::class, 'id');
    }
}
