<?php
/**
 * @Author: Kounty
 */
if(!isset($active_menu))
{
    $active_menu = '';
}
?>

<li class="start">
	<a href="javascript:;">
	<i class="fa fa-sitemap"></i>
	<span class="title">User Master</span>
	<span class="arrow "></span>
	</a>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).' Add', '/MasterUsers/Add',['escape' => false]); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul']).' List', '/MasterUsers',['escape' => false]); ?></li>
	</ul>
</li>

<li class="start">
	<a href="javascript:;">
	<i class="fa fa-sitemap"></i>
	<span class="title">Store Master</span>
	<span class="arrow "></span>
	</a>
	<ul class="sub-menu">
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-plus-square']).' Add', '/MasterStores/Add',['escape' => false]); ?></li>
		<li><?php echo $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-list-ul']).' List', '/MasterStores',['escape' => false]); ?></li>
	</ul>
</li>

<?php 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'icon-home']).'States', '/MasterStates/index',['escape' => false]).'</li>';
?>

<?php 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'icon-home']).'Cities', '/MasterCities/index',['escape' => false]).'</li>';
?>

<?php 
echo '<li>'.$this->Html->link($this->Html->tag('i', '', ['class' => 'icon-lock']).'Logout', '/Users/logout',['escape' => false]).'</li>';
?>



