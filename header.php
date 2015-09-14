<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <meta name="renderer" content="webkit"> <!-- 强制双核浏览器使用webkit内核 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp"> <!-- 禁止百度手机版转码 -->
    <meta http-equiv="Cache-Control" content="no-transform">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="shortcut icon" href="http://i2.tietuku.com/dfc41ceafe7bda5a.jpg">
    <link rel="apple-touch-icon" href="http://i2.tietuku.com/dfc41ceafe7bda5a.jpg">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>
<body>
	<header>
		<div class="top">
            <embed style="width: 140px;height: 140px;margin-top: 25px;" src="<?php $this->options->themeUrl('logo.svg'); ?>" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/">
        </div>
	</header>
	<nav>
        <section>
            <ul class="menu">
                <li <?php addActionClass($this);?>><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>

                <?php 
                //分类列表，判断结构为if{if...}else{if...}
                $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <?php while ($category->next()): ?>
                    <li <?php addActionClass($this,'category',$category->slug);?>><a href="<?php $category->permalink(); ?>" >
                        <?php $category->name(); ?>
                    </a></li>
                <?php endwhile; ?>

                <?php 
                //独立页面
                $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                    <li <?php addActionClass($this,'page',$pages->slug);?>><a href="<?php $pages->permalink(); ?>">
                        <?php $pages->title(); ?>
                        <?php //var_dump($pages);?>
                    </a></li>
                <?php endwhile; ?>
                <!--搜索-->
                <li class="search">
                	<form method="post" action="/typecho/" role="search">
                		<input placeholder="Search" type="search" name="s" autocomplete="off">
                	</form>
                </li>
            </ul>
        </section>
    </nav>
    <!--中间标签-->
    <section class="main">