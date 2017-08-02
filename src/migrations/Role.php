<?php

namespace App\Migrations;

/**
* Role Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:39:33
*
*/
class Role extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id')
                ->comment('角色ID');
            $table->string('rname', 16)
                ->comment('角色名称');
            $table->text('rpower', 32)
                ->comment('角色权限');
            $table->tinyInteger('status')
                ->default(1)
                ->comment('角色状态 1：正常 2：删除');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}