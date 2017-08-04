<?php

namespace App\Models;

/**
* Account model
* @author Masterton
* @version 1.0.0
* @time 2017-8-4 14:27:55
*
*/
class Account extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jm_fx2_account';
    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;
    protected $datas = ['deleted_at'];
}