<?php
include 'include/db_connect.php';
if (isset($_POST['delete_btn_set'])) {
    $id = $_POST['delete_id'];
    $delete = mysqli_query($conn, $query = "DELETE FROM `comments` WHERE id='$id'");
    $query = mysqli_query($conn, $delete);
}
?>


<?php
include 'include/css-url.php';
include 'include/header.php';
?>

<div class="container">
        <div class="adminTable card m-3 p-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="employee_data">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comments</th>
                                <th>Blog_id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            
                            $sql = "SELECT * from `comments`";
                            if (mysqli_query($conn, $sql)) {
                                echo "";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                            $count = 1;
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_array($result)) { ?>

                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['comment']; ?></td>
                                        <td><?php echo $row['blog_id']; ?></td>
                                        <td>
                                            <input type="hidden" class="delete_id_value" value="<?php echo $row['id'] ?>">
                                            <a href="javascript:void(0)" class="btn btn-danger delete_btn_ajax"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                            <?php
                                    $count++;
                                }
                            } else {
                                echo '0 results';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<?php
include 'include/footer.php';
include 'include/js-url.php';
include "include/deletemodal.php";
include "include/editmodal.php";
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script>
    $(document).on('click', '.delete_btn_ajax', function() {

        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
        console.log(deleteid);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover your comments!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "comments.php",
                        data: {
                            "delete_btn_set": 1,
                            "delete_id": deleteid,
                        },
                        success: function(response) {

                            swal("Data Delete Successfully.!", {
                                icon: "success",
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    });
                }
            });

    });
</script>