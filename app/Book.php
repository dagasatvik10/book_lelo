<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Nicolaslopezj\Searchable\SearchableTrait;

class Book extends Model
{
    use SearchableTrait;

    protected $guarded = ['id'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $searchable = [
        'columns' => [
            'name' => 10,
            'author' => 10,
            'publication' => 5,
            ],
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function college()
    {
        return $this->belongsTo('App\College');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book_pics()
    {
        return $this->hasMany('App\Book_pic');
    }

    public function scopeBranchSort($query,$branch_id)
    {
        if($branch_id != 'none' and $branch_id != null and !empty($branch_id)) {
            $query->where('branch_id', '=', $branch_id);
        }
    }

    public function scopeYearSort($query,$year)
    {
        if($year != 'none' and $year != null and !empty($year)){
            $query->where('year','=',$year);
        }
    }

    public function scopeCollegeSort($query,$college_id)
    {
        if($college_id != 'none' and $college_id != null and !empty($college_id)){
            $query->whereHas('user',function($q) use($college_id) {
                $q->where('college_id',$college_id);
            });
        }
    }

    public function scopeAuthUserSort($query)
    {
        if(Auth::check()){
            $query->where('user_id','!=',Auth::user()->id);
        }
    }
}
