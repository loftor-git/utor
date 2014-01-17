<?php
	$projects = array(
				array(
					'name' => '程序开发', 'slug' => 'program',
					'sub'=> array(
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
						)
					),
				array(
					'name' => 'WEB', 'slug' => 'web',
					'sub'=> array(
							array('name'=>'MVC','slug'=>'mvc'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
						)
					),
				array(
					'name' => '程序开发', 'slug' => 'program',
					'sub'=> array(
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
							array('name'=>'ORM/持久层框架','slug'=>'orm'),
						)
					),
			);
?>
<?php if($this->is('category','projects')||deep_in_array($this->_archiveSlug,$projects)): ?>
<section class="widget vernav p-0">
	<!-- <h3 class="widget-title">Menu</h3> -->
	<div class="vernav-warp">
		<ul>
		<?php foreach($projects as $category) { ?>
		<li>
			<a class="one"><?php echo $category['name'];?></a>
			<ul <?php if(deep_in_array($this->_archiveSlug,$category['sub'])): ?>class="cur"<?php endif; ?>>
				<?php foreach($category['sub'] as $tag) {?>
				<li><a href="/tag/<?php echo $tag['slug'];?>"><?php echo $tag['name'];?></a></li>
				<?php }?>
			</ul>
		</li>
		<?php }?>
		</ul>
	</div>
</section>
<?php endif; ?>