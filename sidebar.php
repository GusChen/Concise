<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<section class="mainRight">
    <div class="widget">
        <h4 class="title"><?php _e('最新文章'); ?></h4>
        <div class="content">
            	<?php 
                //参数 'pageSize=5' 表示调用5条
                $this->widget('Widget_Contents_Post_Recent','pageSize=5')->parse('<p><a href="{permalink}">{title}</a></p>'); ?>
        </div>
    </div>

    <div class="widget">
        <h4 class="title"><?php _e('最近回复'); ?></h4>
        <div class="content">
            	<?php $this->widget('Widget_Comments_Recent','pageSize=5')->to($comments); ?>
		        <?php while($comments->next()): ?>

		            <p><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(20, '...'); ?></p>
		        <?php endwhile; ?>
        </div>
    </div>

    <div class="widget">
        <h4 class="title"><?php _e('标签云'); ?></h4>
        <div class="content">
           <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
            <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>" rel="tag" class="tag" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('没有任何标签'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="widget">
        <h4 class="title"><?php _e('友联'); ?></h4>
        <div class="content">
            <p><a href="http://www.51yimu.cn" rel="friend" target="_blank">随缘小栈</a></p>
            <p><a href="http://www.liuleiweb.com" rel="friend" target="_blank">E空间</a></p>
            <p><a href="http://www.qiushurong.cn" rel="friend" target="_blank">小树技术博客</a></p>
            <p><a href="http://www.thisck.com/" rel="friend" target="_blank">ck博客</a></p>
            <p><a href="http://www.liusapp.com/" rel="friend" target="_blank">流光博客</a></p>
        </div>
    </div>

</section>