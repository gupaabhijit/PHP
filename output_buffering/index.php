
<?php
ob_start();
?>

<h1>My Page</h1>
My life.



<?php
$redirect_page = 'http://google.co.uk';
$redirect = true;

if($redirect==true){
	header('Location: '.$redirect_page);
}

ob_end_clean();

?>