<?php include '../header.php'; ?>
<?php 

    $name = mysql_real_escape_string($_POST["name"]);
    $email = mysql_real_escape_string($_POST["email"]);
    $address = mysql_real_escape_string($_POST["address"]);
    $phone = mysql_real_escape_string($_POST["phone"]);
    $area = mysql_real_escape_string($_POST["area"]);
    $group = mysql_real_escape_string($_POST["group"]);


    $query = "INSERT INTO donor_info (DNR_NAME, ADDRESS, AREA, PHONE, EMAIL, BLOOD_GROUP) 
        VALUES('$name', '$address', '$area', '$phone', '$email', '$group')";

    $pdo->query($query);

    // header("Location: ../index.php");
    header("Refresh: 5; url=../index.php");


 ?>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
            </div>
            <div class="modal-body">
                <p>You'll be the first to know when Shopaholic launches.</p>                     
                <p>In the meantime, any <a href="http://shopaholic.uservoice.com/" target="_blank">feedback</a> would be much appreciated.</p>
            </div>    
        </div>
    </div>
</div>

 <script type="text/javascript">
 	$(document).ready(function(){
       $('#thankyouModal').modal('show');
   });
 </script>


 <?php include '../footer.php'; ?>