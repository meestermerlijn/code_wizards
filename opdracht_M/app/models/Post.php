<?php

class Post extends Model
{
    protected $table = 'posts';


    public function user(): object
    {
        return (new User)->where('id', $this->user_id)->get(true);
    }
}