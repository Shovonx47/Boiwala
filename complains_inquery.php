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
<?php include 'header_delivery.php'; ?>

<div class="container">
	 <div class="row">
		
		<table class="table table-striped">
			<thead>
				<th>Sender</th>
				<th>Against</th>
				<th>Complain</th>
			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn,"select * from complains order by Complain_no asc");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['Sender']; ?></td>
							 <td><?php echo $subrow['Against']; ?></td>
							 <td><?php echo $subrow['Complain']; ?></td>
							  
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