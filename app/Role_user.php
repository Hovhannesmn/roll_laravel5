<?php
namespace App;
use Zizaco\Entrust\EntrustRole;
class Role_user extends EntrustRole
{
    protected $fillable = [
        'user_id',
        "role_id",
    ];

//    public function roles()
//    {
//        return $this->belongsToMany('App\Role_user');
//    }
}
