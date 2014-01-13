<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-9" id="main" role="main">
        <!-- <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3> -->
        <?php if ($this->have()): ?>
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
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
