<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'category_id'
    ];

    public function children()
    {
        return $this->hasMany(Category::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    # Maybe this should be somehow cashed in the session since it's used so much?
    public static function allByUser(int $id)
    {
       return self::where('user_id', $id)->get();
    }

    # Return all categories with no parent above them
    public static function allTopLevel(int $id)
    {
        return self::where('user_id', $id)->where('category_id', null)->get();
    }

    # Capitalize the first letter every time the name gets got
    public function getNameAttribute($name): string
    {
        return ucwords($name);
    }

}
