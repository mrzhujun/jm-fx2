<?php

namespace App\Migrations;

/**
* Route Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:46:27
*
*/
class Route extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id')
                ->comment('主键id');
            $table->string('op_class', 32)
                ->comment('接口大分类');
            $table->string('op_name', 32)
                ->comment('接口小分类');
            $table->string('name', 32)
                ->comment('路由/接口名称');
            $table->string('desc', 32)
                ->comment('接口描述');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}