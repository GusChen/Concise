<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<section class="mainRight">
    <div class="widget">
        <h4 class="title"><?php _e('最新文章'); ?></h4>
        <div class="content">
            	<?php $this->widget('Widget_Contents_Post_Recent')->parse('<p><a href="{permalink}">{title}</a></p>'); ?>
        </div>
    </div>

    <div class="widget">
        <h4 class="title"><?php _e('最近回复'); ?></h4>
        <div class="content">
            	<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
		        <?php while($comments->next()): ?>
		            <p><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></p>
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
            
        </div>
    </div>

</section>