<?php

namespace App;



class Post extends Model
{
    
    public function user(){ //$comment->post->user
     return $this->belongsTo(User::class);
   }
}
