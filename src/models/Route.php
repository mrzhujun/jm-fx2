<?php

namespace App\Models;

/**
* Route model
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:45:49
*
*/
class Route extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jm_fx2_route';
    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;
    protected $datas = ['deleted_at'];
}