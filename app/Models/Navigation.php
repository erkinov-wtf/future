<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'navigation';

    public function parent()
    {
        return $this->belongsTo('App\Models\navigation', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\navigation', 'parent_id');
    }

}
