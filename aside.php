<div class="col-tb-3 col-wd-2 kit-hidden-mb" id="aside" role="aside">
	<section class="tags widget">
		<h3>Tags</h3>
		<div>
			<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
			<?php if($tags->have()): ?>
			<?php while ($tags->next()): ?>
			<a href="<?php $tags->permalink();?>"  title="<?php $tags->name(); ?>"><?php $tags->name(); ?></a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<div id="social-position"></div>
	<section class="social widget">
		<p>微信公众平台：搜索“Loftor”或扫描下面的二维码：</p>
		<div class="social-weixin"><img alt="" src="<?php $this->options->themeUrl('img/weixin.jpg'); ?>"></div>
		<div class="social-icons">
			<ul>
				<li><a class="icons-weibo external" href="http://weibo.com/wow36kr" target="_blank">Weibo</a></li>
				<li><a class="icons-twitter external" href="https://twitter.com/36kr" target="_blank">Twitter</a></li>
				<li><a class="icons-facebook external" href="http://www.facebook.com/X36Kr" target="_blank">Facebook</a></li>
				<li><a class="icons-rss" href="http://www.36kr.com/feed/" target="_blank">RSS</a></li>
			</ul>
		</div>
	</section>
</div>