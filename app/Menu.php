<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table        = 'menu';
    protected $fillable     = ['id','parent_id','title','url','type','order'];


    public function children()
    {
        return $this->hasMany('App\Menu','parent_id','id');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }

    public function scopeParent($query)
    {
        $query->where('parent_id',null);
    }

    public function parent()
    {
        return $this->hasOne('App\Menu','id','parent_id');
    }

    public function child()
    {
        return $this->hasMany('App\Menu','parent_id','id');
    }
}
