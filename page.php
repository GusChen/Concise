<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="mainLeft">

        <article class="post">
            <div class="post-head">
                <h2 class="post-title" itemprop="name headline">
                    <a itemtype="url" href="javascript:void(0);"><?php $this->title() ?></a>
                </h2>
            </div>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
                <?php $this->need('comments.php'); ?>
        </article>
</section>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>