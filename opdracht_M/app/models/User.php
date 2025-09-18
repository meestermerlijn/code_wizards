<?php


class User extends Model
{
    protected $table = 'users';

    public function posts(): array
    {
        return (new Post)->where('user_id', $this->id)->get();
    }
}