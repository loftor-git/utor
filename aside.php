<div class="col-2 col-tb-3 kit-hidden-mb" id="aside" role="aside">
	<?php $this->need('widget/projects-menu.php'); ?>
	<?php if($this->is('index')): ?>
	<section class="tags widget">
		<h3 class="">Tags</h3>
		<div>
			<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
			<?php if($tags->have()): ?>
			<?php while ($tags->next()): ?>
			<a href="<?php $tags->permalink();?>"  title="<?php $tags->name(); ?>"><?php $tags->name(); ?></a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>

	<?php if($this->is('post')||$this->is('category','news')||$this->_archiveSlug=='news'||$this->_archiveSlug=='project-news'): ?>
	    <section class="widget">
	    <h3 class="widget-title">Updated</h3>
	        <ul class="widget-list ">
	            <?php $this->widget('Widget_Contents_Post_Recent')->to($items)?>
	            <?php if($items->have()): ?>
	            <?php while ($items->next()): ?>
	            <li class="clearfix">
	                <div class="<?php if (isset($items->fields->thumb)): ?>col-wd-8<?php endif; ?> col-tb-12 p-0">
	                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
	                </div>
	            </li>
	            <?php endwhile; ?>
	            <?php endif; ?>
	        </ul>
	    </section>
	    <?php endif; ?>


	<div id="aside-position"></div>
	<section class="social widget aside-fixed p-0">
		<p>微信公众平台：搜索“Loftor”或扫描下面的二维码：</p>
		<div class="social-weixin"><img alt="" src="<?php $this->options->themeUrl('img/weixin.jpg'); ?>"></div>
		<!-- <div class="social-icons">
			<ul>
				<li><a class="icons-weibo external" href="http://weibo.com/wow36kr" target="_blank">Weibo</a></li>
				<li><a class="icons-twitter external" href="https://twitter.com/36kr" target="_blank">Twitter</a></li>
				<li><a class="icons-facebook external" href="http://www.facebook.com/X36Kr" target="_blank">Facebook</a></li>
				<li><a class="icons-rss" href="http://www.36kr.com/feed/" target="_blank">RSS</a></li>
			</ul>
		</div> -->
	</section>
	
</div>