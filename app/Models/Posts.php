<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function userInfo($id)
    {
        return UserInfo::where('user_id', $id)->first();
    }
}
