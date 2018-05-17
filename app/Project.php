<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Project extends Model
{
    use Notifiable;

    protected $fillable = [
        'projectName','projectDetail', 'creationDate', 'author',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
