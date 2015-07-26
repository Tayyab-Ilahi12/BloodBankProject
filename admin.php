<?php include 'header.php'; ?>




<div class="container">
    <div class="welcome">
        <?php
            if(isset($_SESSION['SESS_MEMBER_ID'])) {
                echo "Welcome {$_SESSION['SESS_NAME']}";
                ?>

                <h1>Add Donor Info </h1>
                <p class="text-muted small"> Please update these info after the Donor Donate Blood</p>

                <form method="post" action="inc/donate.php">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Kader Molla">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="kader@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Address</label>
                        <textarea name="address" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Phone</label>
                        <input name="phone" type="tel" class="form-control" id="exampleInputEmail" placeholder="017211818310">
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <select name="area" class="form-control" id="area">
                            <option>Mohakhali</option>
                            <option>Motijheel</option>
                            <option>Dhanmondi</option>
                            <option>Bonani</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bloodgroup">Blood Group</label>
                        <select name="group" class="form-control" id="bloodgroup">
                            <option>Not Tested</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">Blood Amount</label>
                        <p class="text-muted small">The Unit of Blood Amount is Litre. Just input a number</p>
                        <input name="amount" type="text" class="form-control" id="amount" placeholder="2">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

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

                <?



            } else {
                echo "Not logged in, please login first. ";
            }
        ?>

    </div>
</div>









<?php include 'footer.php'; ?>