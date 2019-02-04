<?php
session_start();

include "db.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div id="main">
		<h1 style="background-color: #6495ed; color: white"><?php echo $_SESSION['name']?>-online</h1>

		<div class="output">
			<?php 
			$sql="SELECT * FROM posts";
			$result=$conn->query($sql);
			if($result->num_rows >0){
			// output data from each row
			while($row=$result->fetch_assoc()) {
				echo "" .$row['name']. "" ."::".$row['msg']."--" .$row['date']. "<br>";
				echo "<br>";
			}
		}else{
			echo "0 results";
		}
		$conn->close();


			?>
			

		</div>
		<form method="post" action="sends.php">
			<textarea name="msg" placeholder="type to send your message...." class="form-control"></textarea><br><br>
			<input type="submit" name="" value="send">
		</form>
			<br>
			<form action="logout.php">
				<input type="submit" name="" value="logout" style="width: 100%;background-color: #6495ed;color: white;font-size: 20px;">

			</form>

	 
		
	</div>

</body>
</html>