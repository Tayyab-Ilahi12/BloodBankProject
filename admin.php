<?php include 'header.php'; ?>




<div class="container">
    <div class="welcome">
        <?php
            if(isset($_SESSION['SESS_MEMBER_ID'])) {
                echo "Welcome {$_SESSION['SESS_NAME']}";
            } else {
                echo "Not logged in, please login first. ";
            }
        ?>

    </div>
</div>









<?php include 'footer.php'; ?>