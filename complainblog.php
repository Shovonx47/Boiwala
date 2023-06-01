<?php include('config.php'); ?>
 

	 <!DOCTYPE html>



<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Seller page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
</head>
<body>
<?php include 'header_admin.php'; ?>
<?php include 'info_uploads_complain.php'; ?>
<div class="container">
	 <div class="row">
		
		<table class="table table-striped">
			<thead>
				<th>Name</th>
                <th>Id</th>
                <th>Blog</th>
			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn,"select * from news order by id asc");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['name']; ?></td>
							 <td><?php echo $subrow['id']; ?></td>
							 <td><?php echo $subrow['news']; ?></td>
							 <td><?php echo" <a  href='remove_complainblogapi.php?=$subrow[name]'><button type='button'class='btn btn-danger'>Solved</button></a>" ?> </td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>