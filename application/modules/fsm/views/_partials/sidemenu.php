<div class="menu">
    <ul class="list">
	<li class="header">MAIN NAVIGATION</li>

	<?php foreach ($menu as $parent => $parent_params): ?>

		<?php if ( empty($page_auth[$parent_params['url']]) || $this->ion_auth->in_group($page_auth[$parent_params['url']]) ): ?>
		<?php if ( empty($parent_params['children']) ): ?>

			<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
			<li>
				<a href='<?php echo $parent_params['url']; ?>'>
                                    <i class='material-icons'><?php echo $parent_params['icon']; ?></i> <span><?php echo $parent_params['name']; ?></span>
				</a>
			</li>

		<?php else: ?>

			<?php $parent_active = ($ctrler==$parent); ?>
			<li>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class='material-icons'><?php echo $parent_params['icon']; ?></i> 
                                        <span><?php echo $parent_params['name']; ?></span> 
				</a>
				<ul class='ml-menu'>
					<?php foreach ($parent_params['children'] as $name => $url): ?>
						<?php if ( empty($page_auth[$url]) || $this->ion_auth->in_group($page_auth[$url]) ): ?>
						<?php $child_active = ($current_uri==$url); ?>
						<li <?php if ($child_active) echo 'class="active"'; ?>>
							<a href='<?php echo $url; ?>'><?php echo $name; ?></a>
						</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</li>

		<?php endif; ?>
		<?php endif; ?>

	<?php endforeach; ?>
	
	<?php if ( !empty($useful_links) ): ?>
		<li class="header">USEFUL LINKS</li>
		<?php foreach ($useful_links as $link): ?>
			<?php if ($this->ion_auth->in_group($link['auth']) ): ?>
			<li>
				<a href="<?php echo starts_with($link['url'], 'http') ? $link['url'] : base_url($link['url']); ?>" target='<?php echo $link['target']; ?>'>
					<i class="fa fa-circle-o <?php echo $link['color']; ?>"></i> <?php echo $link['name']; ?>
				</a>
			</li>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
    </ul>
</div>
