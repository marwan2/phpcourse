<?php include 'connection.php'; ?>
<?php include 'functions.php'; ?>
<?php
	if(isset($_POST['btn_submit']))
	{
		$name = clean_input($connection, $_POST['name']);
		$price = clean_input($connection, $_POST['price']);
		$descirption = clean_input($connection, $_POST['description']);

		//var_dump($_FILES['image']);die;
		//select file
		//extension
		//size
		if($_FILES['image']['name']) {
			//select file
			$image_name = $_FILES['image']['name'];
			if($_FILES['image']['type']=='image/jpeg' || $_FILES['image']['type']=='image/x-png' || $_FILES['image']['type']=='image/png')
			{
				if($_FILES['image']['size'] <= 3145728)
				{
					$ext = substr($_FILES["image"]["name"], strrpos($_FILES["image"]["name"], '.') + 1);
					$image_name = rand(1000, 9999) .'.'.$ext;
					move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image_name);
				}
			}
		}

		$sql = 'INSERT INTO products (name, price, image, description)
			VALUES("'.$name.'", "'.$price.'", "'.$image_name.'", "'.$description.'")';

		$result = mysqli_query($connection, $sql);
		if($result)
		{
			header('location: index.php');
		} else {
			echo 'Error, '. mysqli_error($connection);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype='multipart/form-data'>
		<p>
			<label>Product Name</label>
			<input type="text" name="name">
		</p>
		<p>
			<label>Price</label>
			<input type="text" name="price">
		</p>
		<p>
			<label>Image</label>
			<input type="file" name="image">
		</p>
		<p>
			<label>Description</label>
			<textarea name="description"></textarea>
		</p>
		<p>
			<button type="submit" name="btn_submit">Insert</button>
		</p>		
	</form>
</body>
</html>