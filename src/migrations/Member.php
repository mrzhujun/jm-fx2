<?php

namespace App\Migrations;

/**
* Member Table Migration
* @author Masterton
* @version 1.0.0
* @time 2017-8-2 11:52:53
*
*/
class Member extends Base
{    
    public function up()
    {
        $this->schema->create($this->table_name, function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('userid')
                ->comment('会员id');
            $table->char('identify', 16)
                ->nullable()
                ->comment('会员识别码');
            $table->string('nickname', 32)
                ->comment('昵称');
            $table->string('email', 64)
                ->comment('邮箱地址');
            $table->decimal('balance', 6, 2)
                ->default(0.00)
                ->comment('账户余额');
            $table->text('groupid', 32)
                ->nullable()
                ->comment('用户组id');
            $table->char('password', 32)
                ->comment('密码');
            $table->timestamp('reg_date', 32)
                ->comment('注册日期');
            $table->char('reg_ip', 15)
                ->comment('注册IP地址');
            $table->string('mobile', 20)
                ->comment('注册手机号码');
            $table->string('weibo', 20)
                ->comment('微博账号');
            $table->string('wechat', 32)
                ->comment('微信账号');
            $table->string('qq', 16)
                ->comment('QQ账号');
            $table->tinyInteger('type')
                ->nullable()
                ->comment('会员类型 1：企业会员 2：个人会员');
            $table->tinyInteger('grade')
                ->default(1)
                ->comment('会员等级 普通会员 2：银牌会员等');
            $table->tinyInteger('status')
                ->default(1)
                ->comment('会员状态 1：正常 2：删除');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}