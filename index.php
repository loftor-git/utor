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

<div class="col-mb-12 col-9" id="main" role="main">
	<?php while($this->next()): ?>
	<article class="post">
	<?php if (isset($this->fields->logo)): ?>
		<div class="post-logo kit-hidden-mb">
			<a href="<?php $this->permalink() ?>"><img src="<?php $this->fields->logo(); ?>" alt="<?php $this->title() ?>" /></a>
		</div>
	<?php endif; ?>
		<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<ul class="post-meta">
			<li><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
			<li><?php _e('时间：'); ?><?php time_tran($this->date)?></li>
			<li><?php _e('关键字：'); ?><?php $this->tags(','); ?></li>
			<li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
		</ul>
		<div class="post-content">
			<?php $this->content('- 阅读剩余部分 -'); ?>
		</div>
	</article>
	<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
