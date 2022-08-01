<?php
include 'admin/include/db_connect.php';
$sql = "select * from `blog`";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count = 1;
$result = mysqli_query($conn, $sql);
?>



<?php

include 'include/css-url.php';
?>

<?php
include 'include/header.php';
?>

<section class="featured-posts no-padding-top">
    <div class="container">
        <!-- Post-->
        <div class="row">
           
                    <div class="col-md-8">
                         <?php
                        if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="row  mb-4">
                            <div class="image col-lg-5">
                                <img src="<?php echo $url . $row['image_url'] ?>" alt="..." class="w-100">
                            </div>
                            <div class="text col-lg-7">
                                <div class="text-inner d-flex align-items-center">
                                    <div class="post-contents">
                                        <header class="post-header">
                                            <a href="blogdetails.php?pid=<?php echo $row['id']; ?>">
                                                <h2 class="h4 text-dark"><?php echo $row['title'] ?></h2>
                                            </a>
                                        </header>
                                        <div style="font-size:18px">
                                            <?php echo $row['content'] ?>
                                        </div>
                                        <footer class="post-footer d-flex align-items-center mt-2">
                                            <div class="date mr-2">
                                                <i class="fa fa-clock mr-1"></i> <?php echo $row['date']; ?>
                                            </div>
                                            <div class="comments">
                                                <i class="fa fa-comment mr-1 click"></i>12
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php
                }
            }
            ?>
                    </div>
           
            <div class="col-md-4">
                <h3 class="mb-4 font-weight-bold">Trending Blogs</h3>
                <?php
                 $sql = "select * from `trending` where `blog_cat` ='Trending'";
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                 while ($row = mysqli_fetch_array($result)) { 
                ?>
                <div class="row mb-5">
                    <div class="image col-lg-5">
                        <img src="<?php echo $url . $row['image_url'] ?>" alt="..." class="w-100">
                    </div>
                    <div class="text col-lg-7">
                        <div class="text-inner d-flex align-items-center">
                            <div class="post-contents">
                                <a href="trendingblogdetails.php?id=<?php echo $row['id']; ?>">
                                <h5 class="text-dark"><?php echo $row['title'] ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
                <?php
                }
                 }
                ?>
                
                <h3 class="mb-4 font-weight-bold">Latest Blog</h3>
                <?php
                 $sql = "select * from `trending` where `blog_cat` ='Latest'";
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                 while ($row = mysqli_fetch_array($result)) { 
                ?>
                <div class="row">
                    <div class="image col-lg-5">
                        
                        <img src="<?php echo $url . $row['image_url'] ?>" alt="..." class="w-100">
                    </div>
                    <div class="text col-lg-7">
                        <div class="text-inner d-flex align-items-center">
                            <div class="post-contents">
                                <a href="trendingblogdetails.php?id=<?php echo $row['id']; ?>">
                                <h5 class="text-dark"><?php echo $row['title'] ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
                <?php
                }
                 }
                ?>
            </div>
        </div>
    </div>
</section>



<script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>
<?php
include 'include/footer.php';
include 'include/js-url.php';
?>