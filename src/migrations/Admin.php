<?php

namespace App\Migrations;

/**
* Admin Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:23:50
*
*/
class Admin extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id')
                ->comment('主键ID');
            $table->char('username', 20)
                ->comment('用户名');
            $table->char('password', 32)
                ->comment('密码');
            $table->char('regip', 15)
                ->comment('注册ip');
            $table->timestamp('regtime')
                ->comment('注册时间');
            $table->string('realname', 50)
                ->comment('管理员真实姓名');
            $table->tinyInteger('status')
                ->default(1)
                ->comment('管理员状态 1：正常 2：删除');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}