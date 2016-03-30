<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'image',
        "title",
        "text"
    ];

    public function rules()
    {
        return
            array (
                'title'       => 'required',
                'text'        => 'required',
                'image'       => 'required'
            );
    }

}
