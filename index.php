<?php include 'header.php'; ?>

    <!--slider sec-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8 sexy_nurese ">
                    <div class="slider_wrapper">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/slider/slide(3).jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1>Caption Here</h1>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider/slide(4).jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1>Caption Here</h1>
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 ">
                    <div class="pull-right sexy_nurese" href="#"><img src="images/nurse.png" alt=""/></div>
                </div>
            </div>
        </div>
    </section>

    <!--top rated donor-->
    <section class="main_contents" id="app_view_normal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Top Donor's List</h1>


                    <div class="list-group">
                        <?php
                        $sql = "select DNR_NAME from donor_info";
                        foreach ($pdo->query($sql) as $row) {
                        ?>

                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading"><?php echo $row['DNR_NAME']; ?></h4>
                                <p class="list-group-item-text text-muted">Donated: 12 times</p>
                            </a>
                            <?php
                        }
                        ?>


                    </div>
                </div>
                <!--near by area -->
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Nearby You</h1>
                    <div class="nearby_point">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--about us-->
    <section class="main_contents" id="app_view_about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h1>Necessary to Know</h1>

                    <p>About us</p>
                </div>
            </div>
        </div>
    </section>

    <!--contact us-->
    <section class="main_contents" id="app_view_contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h1>Necessary to Know</h1>

                    <p>Contact us</p>
                </div>
            </div>
        </div>
    </section>

    <!--Donate-->
    <section class="main_contents" id="app_view_donate">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Donate Blood ?</h1>

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

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Necessary things to Know</h1>
                    <div class="who_can">
                        <img class="img-responsive" src="images/who.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include 'footer.php'; ?>