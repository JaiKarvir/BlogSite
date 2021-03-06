<?php

namespace App;

use App\User;
use Carbon\Carbon;

class Post extends Model
{

    public function user(){ //$comment->post->user
     return $this->belongsTo(User::class);
   }

   public function comments(){ //$comment->post->user
     return $this->hasMany(Comment::class);
   }

   public function addComment($comment){ 
     $this->comments()->create(['body'=>$comment ,  'user_id' => auth()->id() ]);
   }

   public function tags(){ 
     return $this->belongsToMany(Tag::class);
   }

   public static function archives(){
     return static::selectRaw('year(created_at) year ,monthname(created_at) month,count(*) published')
     ->groupBy('year','month')
     ->orderByRaw('min(created_at) desc')
     ->get()
     ->toArray();
   }

   public function scopeFilter($query,$filters){

    if($month = $filters['month']){
      $query->whereMonth('created_at',Carbon::parse($month)->month);     
    }

    if($year = $filters['year']){
      $query->whereYear('created_at',$year);     
    }

  }
}
