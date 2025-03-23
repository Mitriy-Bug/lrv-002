<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'group_id',
        'surname', // Добавьте сюда surname
        'name',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
