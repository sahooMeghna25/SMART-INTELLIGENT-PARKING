<?php
include_once('header.php');
$area_id = $_GET['area_id'];
$vehicle_id = $_GET['vehicle_id'];
$sql = "SELECT  * FROM slot_details WHERE vehicle_id=$vehicle_id";
$result =  mysqli_query($con, $sql);
//echo "<pre>";
?>
<section class="features--section pt--70 pb--50 bg--overlay" style="background-image: url(d.jpg); padding-top:96px; padding-bottom: 105px; height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover">
    <div class="container">
        <div class="section--title pb--50 text-center">
            <h2 class="h1 text-uppercase">
                <font color="#ff5252"><strong>PARKING SLOTS</strong></font>
            </h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                </div>
            </div>
        </div>
        <div class="row AdjustRow" data-scroll-reveal="group">



            <?php
            while ($row = mysqli_fetch_array($result)) {
                //print_r($row); 
                $slot_details_id = $row['slot_details_id'];
                $slot_details_name = $row['slot_details_name'];
                $vehicle_id  = $row['vehicle_id'];
            ?>
                <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                    <div class="feature--item style--1 text-center">
                        <div class="img"> <img src="parknew.png" alt=""> <img src="parknew.png" alt=""> </div>
                        <div class="title">
                            <h3 class="h4">slot <?php echo $slot_details_name; ?></h3>
                        </div>
                        <form action="booking.php" method="post">
                            <input type="hidden" name="slot_details_id" value="<?php echo $slot_details_id ?>" />
                            <input type="hidden" name="area_id" value="<?php echo $area_id ?>" />
                            <input type="hidden" name="vehicle_id" value="<?php echo $vehicle_id ?>" />

                            <input type="submit" name="btnSubmit" value="Booking Check" class="btn btn-default">
                        </form>
                    </div>

                </div>
                <div class="col-md-4 col-xs-6 col-xxs-12">
                    <div class="feature--item style--1 text-center">
                        <div class="img"> <img src="parknew.png" alt=""> <img src="parknew.png" alt=""> </div>
                        <div class="title">
                            <h3 class="h4" style="margin-bottom: 12px !important;">slot 15</h3>
                            <a href="#"  onclick="myfun()" style="border: 1px solid red;margin-top:20px; padding: 10px; border-radius: 15px;">Booking Check</a>
                        </div>
                        
                    </div>

                </div>
            <?php
            }
            ?>


        </div>
    </div>
            <script>
                function myfun(){
                    alert("no more slot left");
                }
            </script>

    <?php include_once('footer.php'); ?>