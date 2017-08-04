<?php

namespace App\Migrations;

/**
* Account Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-4 14:28:27
*
*/
class Account extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id')
                ->comment('主键ID');
            $table->string('username', 64)
                ->comment('用户登录名');
            $table->bigInteger('uid')
                ->comment('用户id');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}