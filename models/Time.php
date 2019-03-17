<?php namespace Jc91715\Bill\Models;

use Model;

/**
 * time Model
 */
class Time extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jc91715_bill_times';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = ['bills'=>Bill::class];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    public static function boot()
    {
        parent::boot();

        static::saving(function($model){
            $model->today_amount = $model->bills->sum('amount');
        });
    }
    public function calculate(){


    }
}
