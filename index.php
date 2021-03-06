<?php
/**
 * 简洁主题
 *
 * @package Concise
 * @author 小鱼Gus
 * @version 0.1 test
 * @link http://www.mycgx.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<section class="mainLeft">

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
            <div class="post-tag">
                <?php $this->tags(' ', true, ''); ?>
            </div>
        </article>
    <?php endwhile; ?>

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