<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Project extends Model
{
    use Notifiable;

    protected $fillable = [
        'projectName','projectDetail', 'creationDate', 'author','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
