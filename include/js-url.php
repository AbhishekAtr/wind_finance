<script>
    const menu =document.querySelector(".hamburger");
    menu.addEventListener("click",function(){
        document.querySelector('.menu').classList.toggle("active")
    })
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="assests/js/bootstrap.min.js"></script>
<script src="./assests/js/main.js"></script>
<script src="https://kit.fontawesome.com/6ab5ec2809.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="assets/js/jquery-3.3.1.slim.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/featherlight.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
// contactformsubmit

function submitForm(formId) {
    debugger
    try {
        
        if (!$("#" + formId).valid()) {
            return false
        }
        $("button").attr('disabled', true)
        var postData = $('#' + formId).serialize()

        $.ajax({
            type: 'POST',
            url: "mail.php",
            data: postData,
            success: function (data) {
                $("button").attr('disabled', false)
                if (data == 1) {
            

             

                    $("#" + formId)[0].reset();
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    $("#myModalEnquiry").modal("hide");
                } else {
                    alert(data)
                }
            },
            error: function (error) {
                $("button").attr('disabled', false)
                alert("Something went wrong, please try again later")
            }
        });
    } catch (error) {
        console.log(error.message);

        $("button").attr('disabled', false)
        alert("Something went wrong, please try again later")
    }
}

// contactformsubmit



// inquiry
function submitInq(formId) {
    debugger
    try {
        
        if (!$("#" + formId).valid()) {
            return false
        }
        $("button").attr('disabled', true)
        var postData = $('#' + formId).serialize()

        $.ajax({
            type: 'POST',
            url: "inquiry-mail.php",
            data: postData,
            success: function (data) {
                $("button").attr('disabled', false)
                if (data == 1) {
            

             

                    $("#" + formId)[0].reset();
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    $("#myModalEnquiry").modal("hide");
                } else {
                    alert(data)
                }
            },
            error: function (error) {
                $("button").attr('disabled', false)
                alert("Something went wrong, please try again later")
            }
        });
    } catch (error) {
        console.log(error.message);

        $("button").attr('disabled', false)
        alert("Something went wrong, please try again later")
    }
}
</script>
</body>
</html>