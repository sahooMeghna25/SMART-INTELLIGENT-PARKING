<?php
    include('header.php');
    include_once('dbconnect.php');
    ///echo "<pre>";print_r($_POST);exit;
    $slot_details_id = $_POST['slot_details_id'];
    $location_id = $_POST['area_id'];
    $vehicle_type = $_POST['vehicle_id'];
    $sql = "SELECT  * FROM slot_details WHERE slot_details_id=$slot_details_id";
    $result =  mysqli_query($con, $sql);
    $customer_id = "";
    if (isset($_SESSION['customer_id'])) {
      $customer_id = $_SESSION['customer_id'];
    } else {
      header('Location:login.php');
    }

    ?>
<section class="features--section pt--70 pb--50 bg--overlay" style="background-image: url(d.jpg); padding-top:96px; padding-bottom: 105px; height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover">
  <div class="container">
    <div class="section--title pb--50 text-center">
      <h2 class="h1 text-uppercase">
        <font color="#ff5252"><strong style="padding-bottom: 100px; margin-top: 20px">PARKING SLOTS</strong></font>
      </h2>
      <br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        </div>
      </div>

      <div class="row AdjustRow" data-scroll-reveal="group">

        <?php
        $current_data = date('Y-m-d');
        //$sql = "SELECT  * FROM slot_capacity WHERE slot_details_id=$slot_details_id";
        $sql = "SELECT sc.slot_capacity_id AS capacity_id ,sc.slot_capacity_name,sc.slot_details_id AS details_id,b.booking_id,b.vehicle_id,b.area_id,b.entrydate,b.exitdate,b.entrytime,b.exittime,b.slot_details_id,b.slot_capacity_id,b.user_id FROM slot_capacity sc LEFT JOIN booking b ON sc.slot_capacity_id = b.slot_capacity_id  WHERE sc.slot_details_id=$slot_details_id ";
        //echo $sql;exit;
        $result =  mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
          //print_r($row);exit;
          $capacity_id  = $row['capacity_id'];
          $slot_capacity_name = $row['slot_capacity_name'];
          $slot_details_id_1 = $row['details_id'];
          $entry_date = $row['entrydate'];
          $vehicle_id = $row['vehicle_id'];
          $area_id = $row['area_id'];
        ?>
          <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
            <div class="feature--item style--1 text-center">
              <div class="img">
                <?php
                if ($entry_date == $current_data) {
                ?><img src="parkc.png" alt=""> <img src="parkb.png" alt=""><?php
                                                                          } else {
                                                                            ?><img src="parknew.png" alt=""> <img src="parknew.png" alt=""> <?php
                                                                                                                                          }
                                                                                                                                            ?>

              </div>
              <div class="title">
                <h3 class="h4">slot <?php echo $slot_capacity_name; ?></h3>
                <form action="booking.php" method="post">

                  <input type="hidden" name="vehicle_type" value="<?php echo $vehicle_type ?>" />
                  <input type="hidden" name="location_id" value="<?php echo $location_id ?>" />
                  <input type="hidden" name="entry_date" value="<?php echo $entry_date ?>" />
                  <input type="hidden" name="slot_details_id" value="<?php echo $slot_details_id_1 ?>" />
                  <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>" />
                  <input type="hidden" name="capacity_id" value="<?php echo $capacity_id ?>" />
                  <?php
                  if ($entry_date == $current_data) {
                  ?><p class="btn btn-default">Booked</p><?php
                                                        } else {
                                                          ?><input type="submit" name="btnSubmit" value="Book now" class="btn btn-default"><?php
                                                                                                                                          }
                                                                                                                                            ?>


                </form>
              </div>

            </div>

          </div>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
</section>


<!--<?php

    include('footer.php');

    ?>-->