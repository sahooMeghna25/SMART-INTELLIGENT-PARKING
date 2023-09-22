<?php
include_once('header.php');

?>


<section class="banner--section">
    <div class="banner--slider owl-carousel" data-owl-dots="true">
        <div class="banner--item bg--overlay" style="background-image: url(s1.jpg);height: 100%; 
                background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                        <h1 class="h1">Welcome to</h1>
                                        <h2 class="h1"><strong>Intelligent Parking System</strong></h2>
                                    </div>
                                    <div class="desc">
                                        <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner--item bg--overlay" style="background-image: url(s2.jpg);
                height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                        <h1 class="h1">Welcome to</h1>
                                        <h2 class="h1"><strong>Intelligent Parking System</strong></h2>
                                    </div>
                                    <div class="desc">
                                        <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner--item bg--overlay" style="background-image: url(b.jpg);height: 100%; 
                background-position: center;background-repeat: no-repeat; background-size: cover;">
            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                        <h1 class="h1">Welcome to</h1>
                                        <h2 class="h1"><strong>Intelligent Parking System</strong></h2>
                                    </div>
                                    <div class="desc">
                                        <p>intelligent parking system help people find parking spots quickly and provide neccessary guidelines to make the whole process smooth,reducing frustration and enhancing the visitor experience.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="domain-search--section pt--70 pb--70">
    <div class="container">
        <div class="section--title pb--30 text-center">
            <h2 class="h1 text-uppercase">Nearby places</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                </div>
            </div>
        </div>
       
    </div>
</section>
<section class="services--section">
    <div class="services--slider owl-carousel" data-owl-nav="true" data-owl-responsive='{"0":{"items": "1"}, "551":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "3"}, "1200":{"items": "4"}}'>
        <?php
        $sql = "SELECT  * FROM area ORDER BY area_id ASC";
        $result =  mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            $area_id = $row['area_id'];
            $area_name = $row['area_name'];
            $area_description = $row['area_description'];
        ?>
            <div class="service--item style--1 p--80 bg--c-main text-center ">
                <div class="icon">
                    <img src="park.png" alt style="width: 50px; height: auto;">
                </div>
                <div class="title text-uppercase">
                    <h2 class="h4"><?php echo $area_name; ?></h2>
                </div>
                <div class="desc">
                    <p>
                        <?php echo $area_description; ?>
                    </p>
                </div>
                <div class="action">
                    <span id="area_name_<?php echo $area_id; ?>" data-area-name-<?php echo $area_id; ?>="<?php echo $area_name; ?>"></span>
                    <a href="#" id="area_id" onclick="return areadId(<?php echo $area_id; ?>); " class="btn btn-primary" data-toggle="modal" data-target="#myModal">Book Now</a>

                </div>
            </div>

        <?php
        }

        ?>


    </div>
    <!-- The Modal -->
    <script type="text/javascript">
        function areadId(area_id) {
            var area_id = area_id;
            $(this).attr("#data-id")
            var area_name = $("#area_name_" + area_id).attr('data-area-name-' + area_id);
            console.log(area_name);
            console.log(area_id);
            $.ajax({
                type: "POST",
                url: "vehicle_type_check.php",
                data: {
                    area_id: area_id,
                    area_name: area_name
                },
                success: function(data) {
                    console.log(data);
                    $("#result").html(data);
                }
            });
        }
    </script>

    <div class="modal" id="myModal" style="background-image: url(a.jpg); height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top: 40%">

                <div id="result"></div>

            </div>
        </div>
    </div>
</section>
<section class="pricing--section pt--70 pb--80" style="background-image: url(c.jpg);
         height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover">
    <div class="container">
        <div class="section--title pb--50 text-center">
            <h2 class="h1 text-uppercase"><strong>Our Pricing</strong></h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                </div>
            </div>
        </div>
        <div class="row AdjustRow" data-scroll-reveal="group">
            <?php
            $sql = "SELECT p.price_id,p.vehicle_price,p.vehicle_id,vt.vehicle_id,vt.vehicle_name FROM price p INNER JOIN vehicletype vt ON p.vehicle_id=vt.vehicle_id";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                //print_r($row);
                $vehicle_price = $row['vehicle_price'];
                $vehicle_name = $row['vehicle_name'];
            ?>
                <div class="col-md-6 col-xs-6  pb--30">
                    <div class="feature--item style--1 text-center">
                        <div class="img"> <img src="parknew.png" alt=""> <img src="parknew.png" alt=""> </div>
                        <div class="title">
                            <h3 class="h4"><?php echo strtoupper($vehicle_name); ?></h3>
                        </div>
                        <div class="desc">
                            <p style="font-weight: bold;font-size: 17px;">Price:<?php echo $vehicle_price; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>

<!--  <section class="testimonials--section pt--70 pb--70">
            <div class="container">
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Customer's Feedback</h2>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial--slider owl-carousel" data-owl-dots="true" data-owl-margin="30" data-owl-speed="2000">
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img"> <img src="img/testimonial-img/client-01.jpg" alt=""> </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>
                                <div class="name">
                                    <p>Maria Doe</p>
                                </div>
                            </div>
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img"> <img src="img/testimonial-img/client-02.jpg" alt=""> </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>
                                <div class="name">
                                    <p>Alan Palmer</p>
                                </div>
                            </div>
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img"> <img src="img/testimonial-img/client-03.jpg" alt=""> </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>
                                <div class="name">
                                    <p>Nicole Morrison</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<?php include_once('footer.php'); ?>