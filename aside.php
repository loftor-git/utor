<div class="col-2 col-tb-3 kit-hidden-mb" id="aside" role="aside">
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
	<div id="aside-position"></div>

	<?php if($this->is('index')): ?>
	<section class="social widget aside-fixed">
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
	<?php endif; ?>
	<?php if($this->is('category')): ?>
	<section class="widget aside-fixed">
		<h3>Menu</h3>
		<div class="vernav-warp">
			<ul class="vernav">
				<li><span>导航菜单</span></li>
				<li class="cur">
					<span>JS代码</span>
					<ul>
						<li><a href="#">网页特效</a></li>
						<li><a href="#">滚动代码</a></li>
					</ul>
				</li>
				<li><span>网页特效</span></li>
				<li><span>滚动代码</span></li>
			</ul>
		</div>
	</section>
	<?php endif; ?>

</div>