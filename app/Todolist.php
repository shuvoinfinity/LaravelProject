<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Todolist extends Model implements SluggableInterface
{
    use SluggableTrait;

    use SoftDeletes;


    protected $sluggable = array(
                'build_from'=>'name',
                'save_to'=>'slug',
        );
    protected $dates = ['deleted_at'];
    

    protected $fillable = [
    		'name', 'description'

    		];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimeStamps();
    }



    /*public function validate()
    {

    	$v = \Validator::make($this->attributes, $this->rules);
    	if($v-> passed())
    		return true;
    	$this->errors = $v -> messages();
    	return false;
    }*/
    //
    /*private $rules = [
            'name' = 'required', 'description' = 'required'
    ];*/
}
