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
				<th>Buyer</th>
				<th>Book</th>
                <th>price</th>
                <th>Seller</th>
                <th>Isbn</th>
				<th>Shipping Address</th>
                <th>Phone_number</th>
                <th>City</th>

			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn,"SELECT s.Full_name,s.book_name,s.Address,s.Phone_number,s.City,
                    s.price,b.seller_id,b.isbn FROM shipping_details as s inner join books as b On s.book_name = b.name  order by Purchased_id;");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['Full_name']; ?></td>
							 <td><?php echo $subrow['book_name']; ?></td>
                             <td><?php echo $subrow['price']; ?></td>
                             <td><?php echo $subrow['seller_id']; ?></td>
                             <td><?php echo $subrow['isbn']; ?></td>
							 <td><?php echo $subrow['Address']; ?></td>
                             <td><?php echo $subrow['Phone_number']; ?></td>
                             <td><?php echo $subrow['City']; ?></td>
                             
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>