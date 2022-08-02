<?php
include 'admin/include/db_connect.php';
$id = "";
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
}
$query = "SELECT * FROM `blog` where `id` = '$id'";
$result = mysqli_query($conn, $query);
?>


<?php
include 'include/css-url.php';
?>

<?php
include 'include/header.php';
?>
<section class="container">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>
            <div class="">
                <div class="row g-0">
                    <div class="col-md-12 border-end">
                        <h1 class="mb-2 font-weight-bold"><?php echo $row['title']; ?></h1>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image">
                                <img src="<?php echo $url . $row['image_url']; ?>" id="main_product_image" class="w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="p-3 right-side">
                            <div class=" align-items-center" style="font-size:18px">
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
</section>

<section>
    <div class="container">
        <h4 class="font-weight-bold mb-4">Add your comments</h4>
        <div class="row">
            <div class="col-md-6">
                <form action="#" method="POST" class="comment_form" id="comment_form">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" placeholder="Enter your Comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <button name="submit" id="submit" class="btn-style btn btn-primary rounded-0 m-auto btn_submit">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php

        }
    } else {
        echo '0 results';
    }
    ?>
<?php 
include 'admin/include/db_connect.php';
if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
    $id = $_POST['id'];
    $sql ="INSERT INTO `comments`( `blog_id`, `name`, `email`, `comment`, `date`) 
    VALUES ('$id','$name','$email','$comment',current_timestamp())";
	$result = mysqli_query($conn, $sql);
	if ($result) {
	}
}
?>
<?php
include 'include/footer.php';
include 'include/js-url.php';
?>

