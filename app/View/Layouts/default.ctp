<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	  #Menu {
		background-color: #c9c89a;
		padding: 10px;
	  }

	  #Fejadatlink, #Teteladatlink, #Fajlneveklink {
		padding: 20px;
		background-color: #e0df9a;
		width: 150px;
		text-align: center;
		margin-bottom: 10px;
		display: inline-block;
		text-align: center;
	  }

	  #Fajlneveklink {
		float: right;
	  }
	</style>
	
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
<!--		<div id="header">-->
<!--			<h1>--><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?><!--</h1>-->
<!--		</div>-->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<div id="Menu">
			  <a href="/abevcake/Fejadatok">
				<div id="Fejadatlink">Új <em>fejadat</em><br> sor generálása.</div>
			  </a>
			  <a href="/abevcake/Teteladatok">
				<div id="Teteladatlink">Új <em>tételadat</em><br> sor generálása.</div>
			  </a>
			  <a href="/abevcake/Fajlnevek">
				<div id="Fajlneveklink">Új <em>fájlnév</em><br> generálása.</div>
			  </a>
			</div>

			<?php echo $this->fetch('content'); ?>
		</div>

<!--		<div id="footer">-->
<!--			--><?php //echo $this->Html->link(
//					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
//					'http://www.cakephp.org/',
//					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
//				);
//			?>
<!--			<p>-->
<!--				--><?php //echo $cakeVersion; ?>
<!--			</p>-->
<!--		</div>-->
<!--	</div>-->
<!--	--><?php //echo $this->element('sql_dump'); ?>

</body>
</html>
