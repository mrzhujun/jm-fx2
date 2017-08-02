<?php

namespace App\Models;

/**
* Role model
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:39:42
*
*/
class Role extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jm_fx2_role';
    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;
    protected $datas = ['deleted_at'];
}