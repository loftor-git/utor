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
<div class="col-7 col-tb-9 col-mb-12" id="main" role="main">
	<?php while($this->next()): ?>
	<article class="post clearfix <?php $odd=!$odd; if ($odd): ?>odd<?php endif; ?>">
		<div class="row">
			<?php if (isset($this->fields->thumb)): ?>
			<div class="kit-hidden-tb col-3">
				<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><img class="post-thumb" src="<?php $this->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
			</div>
			<?php endif; ?>
			<div class="col-mb-12 <?php if (isset($this->fields->thumb)): ?>col-9<?php endif; ?>">
				<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
				<ul class="post-meta clearfix">
					<li class="fl"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 发布于 <?php echo timesince($this->created)?></li>
					<li class="fr"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评', '1 评', '%d 评'); ?></a></li>
				</ul>
				<div class="post-content">
					<?php $this->content('- 阅读剩余部分 -'); ?>
				</div>
				<div class="post-tags"><?php $this->tags(' '); ?></div>
			</div>
		</div>
	</article>
	<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
