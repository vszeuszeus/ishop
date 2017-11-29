<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductGroup extends Model
{

    protected $table = 'product_groups';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    //relations
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function managerPayType(){
        return $this->belongsTo('App\ManagerPayType');
    }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function managers(){
        return $this->belongsToMany('App\User', 'product_group_user', 'product_group_id', 'user_id');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
    //end relations

    //start scopes
    public function scopeIsActive($q){
        return $q->where('active', 1) ;
    }

    //end scopes

    //support methods
    public function storePhotoPath($file)
    {
        $save_path = 'storage/'.substr($file->store('public/upload/productGroups'), 7);
        $this->photo_path = $save_path;
        $this->save();
        return $save_path;
    }

    public function restorePhotoPath($file)
    {
        Storage::delete('public'.substr($this->photo_path, 7));
        $save_path = 'storage/'.substr($file->store('public/upload/productGroups'), 7);
        $this->photo_path = $save_path;
        $this->save();
        return $save_path;
    }

    public function deletePhotoPath()
    {
        Storage::delete('public'.substr($this->photo_path, 7));
    }
    //end support methods




}
