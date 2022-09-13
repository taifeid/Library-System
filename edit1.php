<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$id = $_POST['id'];
			$ISBN = $_POST['ISBN'];
			$book_name = $_POST['book_name'];
		    $price = $_POST['price'];
			$borrowing_date = $_POST['borrowing_date'];
			$member_name = $_POST['member_name'];
			$member_email = $_POST['member_email'];
			$Comment = $_POST['Comment'];

			
	   include('connection.php');
		
	 			$query = 'UPDATE books set 
			     ISBN ="'.$ISBN.'",
				 book_name ="'.$book_name.'",
				 price="'.$price.'",
				 borrowing_date="'.$borrowing_date.'",
				 Comment="'.$Comment.'", 
				 member_name="'.$member_name.'",
				 member_email="'.$member_email.'" WHERE
				 
					id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>