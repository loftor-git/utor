<?php $this->need('header.php'); ?>
<?php $this->need('aside.php'); ?>
    <div class="col-7 col-tb-9 col-mb-12" id="main" role="main">
        <!-- <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3> -->
        <?php if ($this->have()): ?>
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
                        <li class="fl"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> <?php $this->dateWord();?> </li>
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
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
