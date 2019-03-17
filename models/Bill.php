<?php namespace Jc91715\Bill\Models;

use Model;

/**
 * bill Model
 */
class Bill extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'jc91715_bill_bills';

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
    public $hasMany = [];
    public $belongsTo = ['time'=>Time::class];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];




}
