<?php include('config.php'); ?>
 

	 <!DOCTYPE html>



<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Collect page</title>

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
				<th>Book</th>
				<th>Seller</th>
				<th>Address</th>
                <th>Phone</th>
                <th>Isbn</th>

			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn,"SELECT b.name, b.seller_id,u.Address,u.phone,b.isbn
                    FROM users as u inner join books as b
                    ON u.Email=b.seller_id order by isbn asc;");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['name']; ?></td>
							 <td><?php echo $subrow['seller_id']; ?></td>
							 <td><?php echo $subrow['Address']; ?></td>
                             <td><?php echo $subrow['phone']; ?></td>
                             <td><?php echo $subrow['isbn']; ?></td>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>