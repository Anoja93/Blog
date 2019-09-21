<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Post extends Model{
    protected $table = "post";
    protected $fillable = ['title','description','status','photo','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}

