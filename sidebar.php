<div class="col-3 kit-hidden-tb" id="secondary" role="complementary">


<?php if($this->is('post')): ?>
    <?php $this->related(15)->to($items);?>
    <?php if($items->have()): ?>
    <section class="widget">
    <h3 class="widget-title">Related</h3>
        <ul class="widget-list ">
            <?php while ($items->next()): ?>
            <li class="clearfix">
                <?php if (isset($items->fields->thumb)): ?>
                <div class="col-4 kit-hidden p-l-0">
                    <a href="<?php $items->permalink() ?>" title="<?php $items->title() ?>"><img class="post-thumb" src="<?php $items->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
                </div>
                <?php endif; ?>
                <div class="<?php if (isset($items->fields->thumb)): ?>col-wd-8<?php endif; ?> col-tb-12 p-0">
                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($this->is('index')): ?>
    <?php $this->widget('Widget_Archive@RecentProjects', 'type=category', 'mid=2')->to($items);?>
    <?php if($items->have()): ?>
    <section class="widget">
    <h3 class="widget-title">Recent Projects</h3>
        <ul class="widget-list ">
            <?php while ($items->next()): ?>
            <li class="clearfix">
                <?php if (isset($items->fields->thumb)): ?>
                <div class="col-4 kit-hidden p-l-0">
                    <a href="<?php $items->permalink() ?>" title="<?php $items->title() ?>"><img class="post-thumb" src="<?php $items->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
                </div>
                <?php endif; ?>
                <div class="<?php if (isset($items->fields->thumb)): ?>col-wd-8<?php endif; ?> col-tb-12 p-0">
                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
                </div>
            </li>

            <?php endwhile; ?>
            
        </ul>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <?php if($this->is('index')): ?>
    <?php $this->widget('Widget_Archive@RecentNews', 'type=category', 'mid=1')->to($items);?>
    <?php if($items->have()): ?>
    <section class="widget">
    <h3 class="widget-title">Recent News</h3>
        <ul class="widget-list">
            <?php while ($items->next()): ?>
            <li class="clearfix">
                <?php if (isset($items->fields->thumb)): ?>
                <div class="col-4 kit-hidden p-l-0">
                    <a href="<?php $items->permalink() ?>" title="<?php $items->title() ?>"><img class="post-thumb" src="<?php $items->fields->thumb(); ?>" alt="<?php $this->title() ?>" /></a>
                </div>
                <?php endif; ?>
                <div class="<?php if (isset($items->fields->thumb)): ?>col-wd-8<?php endif; ?> col-tb-12 p-0">
                    <a href="<?php $items->permalink();?>"  title="<?php $items->title(); ?>"><?php $items->title(); ?></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <?php if($this->is('index')): ?>
    <section class="widget sidebar-comment">
    <h3 class="widget-title">Comments</h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="clearfix">
                <div class="col-wd-3 kit-hidden p-0">
                <a href="<?php $comments->permalink(); ?>" title="<?php $comments->title() ?>"><?php $comments->gravatar('48',''); ?></a>
                </div>
                <div class="col-wd-9 col-tb-12 p-0">
                    <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>
                    <h5><a href="<?php $comments->permalink(); ?>"><?php $comments->title(); ?></a></h5>
                </div>
                <div class="col-wd-12 col-tb-12 comment-text">
                    <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(100, '...'); ?></a>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>
</div><!-- end #sidebar -->
