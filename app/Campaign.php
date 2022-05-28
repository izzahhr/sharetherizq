<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    public $table="campaigns";

    protected $fillable = [
        'campaign_pic','campaign_title','campaign_desc','campaign_goal','date_start','date_end','campaign_status'
    ];

    protected $primaryKey = 'campaign_id';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
