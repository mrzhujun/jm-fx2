<?php

namespace App\Migrations;

/**
* MemberInfo Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 13:55:01
*
*/
class MemberInfo extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id')
                ->comment('主键id');
            $table->bigInteger('mid')
                ->comment('会员id');
            $table->string('nickname', 32)
                ->comment('昵称');
            $table->tinyInteger('status')
                ->default(1)
                ->comment('会员状态 1：正常 2：删除');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}