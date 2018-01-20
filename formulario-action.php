<?php
if (isset($_POST['email']) && empty($_POST['email'] == false)) {
	if(isset($_POST['senha']) && empty($_POST['senha'] == false)){
		$email = $_POST['email'];?>
		<div style="display: flex;  align-items: center; justify-content: center; flex-direction: column;"><?php echo "O email e ".$email;?></div>
		<?php $senha = $_POST['senha'];?>
		<div style="display: flex; align-items: center; justify-content: center; flex-direction: column;"><?php echo "<br>A senha e ".sha1(md5($senha))	; ?></div><?php
	}
} 
?>