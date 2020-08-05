<?php
	/*
		Try following urls and you will see how you can consolidate 4 functionalities in one page:
		/admin/page.php
		/admin/page.php?action=add
		/admin/page.php?action=edit
		/admin/page.php?action=delete

	*/
	if(!empty($_GET['action'])){
		$action = $_GET['action'];
	}
	//Process page list/add/edit/delete
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(empty($action)){
			//list all pages
	?>
		... page list
	<?php
		}else if($action=='add'){
	?>
		... page add
	<?php
		}else if($action=='edit'){
	?>
		... page edit
	<?php
		}else if($action=='delete'){
	?>
		... page del
	<?php
		}
	?>
</body>
</html>