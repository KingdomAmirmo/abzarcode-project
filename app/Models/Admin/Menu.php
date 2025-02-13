<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];


    // برای جوین داخلی با خود جدول
    public function parent()
    {
        return $this->belongsTo($this, 'parent_id')->with('parent');
    }
    public function children()
    {
        return $this->hasMany($this, 'parent_id')->with('children');
    }

}
