<?php
/**
 * Utor
 * 
 * @package Utor Theme 
 * @author loftor
 * @version 0.8
 * @link http://loftor.com
 */

 $this->need('header.php');
 ?>
<?php $this->need('aside.php'); ?>
<div class="col-mb-12 col-tb-9 col-wd-7 " id="main" role="main">
	<h2 class="main-title kit-hidden-mb">Lastest News</h2>
	<?php while($this->next()): ?>
	<article class="post clearfix">
		<div class="row">
			<ul class="post-meta">
				<li class="col-mb-7"><?php $this->category(','); ?></li>
				<li class="col-mb-3 tr"><!-- <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a># --><?php $this->date('Y-m-d H:m')?></li>
				<li class="col-mb-2 tr"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
		</div>
		<div class="row">
			<?php if (isset($this->fields->thumb)): ?>
			<div class="kit-hidden-tb col-3">
				<a href="<?php $this->permalink() ?>"><img class="post-thumb" src="<?php $this->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
			</div>
			<?php endif; ?>
			<div class="col-mb-12 <?php if (isset($this->fields->thumb)): ?>col-9<?php endif; ?>">
				<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<div class="post-content">
					<?php $this->content('- 阅读剩余部分 -'); ?>
				</div>
			</div>
		</div>
	</article>
	<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
