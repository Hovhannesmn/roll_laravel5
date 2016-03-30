<?php
namespace App;
use Zizaco\Entrust\EntrustRole;
class Role extends EntrustRole
{
    protected $fillable = [
        'name',
        "description",
        "display_name"
    ];
    
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}