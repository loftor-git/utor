<div class="col-wd-3 kit-hidden" id="secondary" role="complementary">
    <section class="widget">
    <h3 class="widget-title">Projects</h3>
        <ul class="widget-list ">
            <?php $this->widget('Widget_Contents_Post_Recent')->to($items);?>
            <?php if($items->have()): ?>
            <?php while ($items->next()): ?>
            <li class="clearfix">
                <?php if (isset($items->fields->thumb)): ?>
                <div class="col-4">
                    <a href="<?php $items->permalink() ?>" title="<?php $items->title() ?>"><img class="post-thumb" src="<?php $items->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
                </div>
                <?php endif; ?>
                <div class="<?php if (isset($this->fields->thumb)): ?>col-8<?php endif; ?>">
                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
                </div>
                
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>

    <section class="widget">
    <h3 class="widget-title">News</h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')->to($items);?>
            <?php if($items->have()): ?>
            <?php while ($items->next()): ?>
            <li class="clearfix">
                <?php if (isset($items->fields->thumb)): ?>
                <div class="col-4">
                    <a href="<?php $items->permalink() ?>" title="<?php $items->title() ?>"><img class="post-thumb" src="<?php $items->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
                </div>
                <?php endif; ?>
                <div class="<?php if (isset($this->fields->thumb)): ?>col-8<?php endif; ?>">
                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
                </div>
                
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>

    <section class="widget sidebar-comment">
    <h3 class="widget-title">Comments</h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="clearfix">
                <div class="col-3 p0">
                <a href="<?php $comments->permalink(); ?>" title="<?php $comments->title() ?>"><?php $comments->gravatar('48',''); ?></a>
                </div>
                <div class="col-9 p0">
                    <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>
                    <h5>评论于:<a href="<?php $comments->permalink(); ?>"><?php $comments->title(); ?></a></h5>
                </div>
                <div class="col-12 comment-content">
                    <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(100, '...'); ?></a>
                </div>

            </li>
        <?php endwhile; ?>
        </ul>
    </section>

</div><!-- end #sidebar -->
