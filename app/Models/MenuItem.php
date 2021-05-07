<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function childrenMenu()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id', 'id');
    }
    
    public function children()
    {
        return $this->childrenMenu()->with('children');
    }

}
