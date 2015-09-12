<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="mainLeft">
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
        <article class="post">
            <div class="post-head">
                <h2 class="post-title" itemprop="name headline">
                    <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
            </div>
            <div class="post-meta">
                <span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('j M Y'); ?></time>  ·  <?php $this->category(','); ?></span>
            </div>
            <?php //if (($this->_currentPage == 1) && ($this->sequence == 1)): ?>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content('Read more »'); ?>
                </div>
            <?php //endif; ?>
            <?php $this->tags(' ', true, '','tag'); ?>
        </article>
    <?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <div class="post-head">
                <h2 class="post-title" itemprop="name headline">
                    <a itemtype="url" href="javascript:void(0);"><?php _e('没有找到内容'); ?></a>
                </h2>
            </div>
        </article>
        <?php endif; ?>
    <div class="post-page clearfix">
        <?php if ($this->_currentPage == 1): ?>
            <?php $this->pageLink('Older Posts','next'); ?>
        <?php else: ?>
            <?php $this->pageLink('Older Posts','next'); ?>
            <?php $this->pageLink('Newer Posts','prev'); ?>
        <?php endif; ?>
    </div>
</section>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>