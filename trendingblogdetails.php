<?php
include 'admin/include/db_connect.php';
?>

<?php
$pid = "";
if (isset($_GET['id'])) {
    $pid = $_GET['id'];
}
$query = "SELECT * FROM `trending` where `id` = '$pid'";
$result = mysqli_query($conn, $query);
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
        <?php

            }
        } else {
            echo '0 results';
        }
        ?>
</section>
<script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>
<?php
include 'include/footer.php';
include 'include/js-url.php';
?>