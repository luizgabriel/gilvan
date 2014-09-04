<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="<?php echo asset('test.css') ?>" type="text/css">

<?php $_view->_regionStart('content') ?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		Ex sunt rem alias a, doloribus molestias hic odit nostrum id quasi voluptatibus,
		mollitia assumenda. Ipsam minus, eveniet eius rem, vero enim?</p>

<?php $_view->_regionEnd() ?>

<h1>Isto é uma View com uma mensagem:</h1>
 <b><?php echo $msg ?></b>

<?php $_view->_region('content') ?>

