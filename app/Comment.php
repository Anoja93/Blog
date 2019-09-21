<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model{

    protected $table = "comment";
    protected $fillable = ['text','post_id','user_id','status','like_count'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}


