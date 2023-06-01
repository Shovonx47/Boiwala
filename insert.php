<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image:url(bnn.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: blue;
        }
        .form-container {
            border: 2px solid black;
            width: 600px;
            margin: 50px auto;
            padding: 30px;
        }
        body {
  color: blue;
}

        textarea {
            font-size: 20px;
        }
        input[type=file], input[type=text], input[type=submit] {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include 'header_seller.php' ?>
    <div class="overlay"></div>
    <div class="container">
        <div class="form-container">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $_SESSION['name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="news">Blog:</label>
                    <textarea name="news" id="news" class="form-control" rows="10" placeholder="Enter Your Writting" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control-file" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
            <?php
            include 'db2.php';

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $news = $_POST['news'];
                $image = $_FILES['image']['name'];
                $image_type = $_FILES['image']['type'];
                $image_size = $_FILES['image']['size'];
                $image_temp_loc = $_FILES['image']['tmp_name'];
                $image_store = "image/" . $image;

                move_uploaded_file($image_temp_loc, $image_store);

                $sql = "INSERT INTO news(name, news, image) values('$name', '$news', '$image')";
                $query = mysqli_query($conn, $sql);

                header("Location: Exitvideo.php");
            }
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
