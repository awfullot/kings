LQ+
===============

## **主要特性**

* 基于`Auth`验证的权限管理系统
    * 支持无限级父子级权限继承，父级的管理员可任意增删改子级管理员及权限设置
    * 支持单管理员多角色
    * 支持目录和控制器结构一键生成权限节点
    * 支持管理子级数据或个人数据
* 完善的前端功能组件开发
    * 基于`Inspinia`二次开发
    * 基于`Bootstrap`开发，自适应手机、平板、PC
    
## **安装使用**

http://backend.ceoe.cc

## **在线演示**

http://backend.ceoe.cc

用户名：admin

密　码：123456

提　示：演示站数据无法进行删除和修改，只能新增，完整体验请下载源码安装体验

## **问题反馈**

在使用中有任何问题，请使用以下联系方式联系我们

QQ群: [83352138]

Email: (752605040#qq.com, 把#换成@)

Github: https://github.com/awfullot/backend.git

## **特别鸣谢**

感谢以下的项目,排名不分先后

ThinkPHP：http://www.thinkphp.cn

Bootstrap：http://getbootstrap.com

jQuery：http://jquery.com

## 版权信息

LQ+遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2017-2018 by LQ+ (http://www.ceoe.cc)

All rights reserved。
## 目录结构
初始的目录结构如下：
~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─module_name        模块目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~