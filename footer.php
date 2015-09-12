<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</section>
    <footer class="footer">
        <section class="content">
        	<div class="l">
        	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> All rights reserved. | <a href="http://www.miitbeian.gov.cn/" rel="external" target="_blank">粤ICP备1503086</a>
        	</div>
        	<div class="r">
    			Theme by <a href="<?php $this->options->siteUrl(); ?>">小鱼Gus</a> | <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>
    		</div>
        </section>
    </footer>
    <?php $this->footer(); ?>
</body>
</html>