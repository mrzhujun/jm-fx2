<?php

namespace App\Models;

/**
* MemberInfo model
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 13:54:18
*
*/
class MemberInfo extends Base
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jm_fx2_member_info';
    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;
    protected $datas = ['deleted_at'];
}