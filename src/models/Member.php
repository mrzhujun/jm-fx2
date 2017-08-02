<?php

namespace App\Models;

/**
* Member model
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:53:03
*
*/
class Member extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jm_fx2_member';
    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;
    protected $datas = ['deleted_at'];
}