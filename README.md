# Slim 项目模板

### 1、文件目录结构

```
|-- project
  |-- plugin 插件目录
  |-- public 公共目录
    |-- index.php 入口文件
  |-- socket
    |-- start.php
    |-- start_io.php
  |-- src 项目主逻辑
    |-- apps api
    |-- config 配置文件
    |-- controllers 控制器
    |-- handlers 主要处理逻辑模板
    |-- middlewares 中间件
    |-- migrations 数据库迁移
    |-- models 数据表模型
    |-- validators 验证器
    |-- dependencies.php slim配置
    |-- functions.php 全局函数
    |-- global_vars.php 全局变量
    |-- middleware.php 中间件
    |-- routes.php 路由
  |-- templates 视图模板
  |-- test
  |-- composer.json
```

### 2、使用到的技术文档

> 1、使用到的数据库操作模型 [Eloquent ORM](https://docs.golaravel.com/docs/5.3/views/)
> 2、数据库迁移 [laravel 中的数据库操作](https://docs.golaravel.com/docs/5.3/migrations/)
> 3、使用的php框架是 [slim 微框架](http://www.slimphp.net/)
> 4、使用的视图模板是 [twig 模板](http://www.twigcn.com/)