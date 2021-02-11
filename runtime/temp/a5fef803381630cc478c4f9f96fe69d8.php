<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy_pro\WWW\MVC\public/../application/index\view\index\index.html";i:1613059172;}*/ ?>
百度公司官方网站www.baidu.com<br/>
Copyright ©1996-2021 SINA Corporation, All Rights Reserved<br/>

<?php $news=db("news")->limit(5)->select();foreach($news as $v):extract($v);?>
<?php echo $title; ?><br/>
<?php endforeach; ?>

