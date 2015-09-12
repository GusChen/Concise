<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="mainLeft">

        <article class="post">
            <div class="post-head">
                <h2 class="post-title" itemprop="name headline">
                    <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
            </div>
            <div class="post-meta">
                <span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('j M Y'); ?></time>  路  <?php $this->title() ?></span>
            </div>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content('Read more »'); ?>
                </div>
        </article>
</section>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>