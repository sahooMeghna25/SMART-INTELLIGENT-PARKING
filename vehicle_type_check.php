<?php 
	include_once('dbconnect.php');
	if(isset($_POST['area_id'])){
		$area_id = $_POST['area_id'];
		$area_name = $_POST['area_name'];
		$sql = "SELECT * FROM vehicletype";
		
		$result =  mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count){
			?>
			<!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><?php echo strtoupper($area_name); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body" >
              	<?php 
              		while ($row = mysqli_fetch_array($result)) {
						
						$vehicle_id = $row['vehicle_id'];
						$vehicle_name = $row['vehicle_name'];
						?>
						<div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customRadio_<?php echo $vehicle_id; ?>" name="vehicle_name" value="<?php echo $vehicle_id; ?>">
                        <label class="custom-control-label" for="customRadio_<?php echo $vehicle_id; ?>"><?php echo $vehicle_name; ?></label>
                  		</div>
					<?php
				}
              	?>
                 <!--   
                   <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                        <label class="custom-control-label" for="customRadio1">Custom radio</label>
                  </div>
              -->
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" style="color: #fff;background-color: #c82333;border-color: #bd2130;" data-dismiss="modal">Close</button>
              	 <button type="button" id ="submit-button" class="btn btn-danger" style="color: #fff;background-color: #c82333;border-color: #bd2130;">submit</button>
              	 <div id="go-next">
              	 	
              	 </div>

              </div> 


			<?php
			
		}else{
			?>
			<div class="modal-header">
                <h4 class="modal-title">No data found</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
			<?php
		}
	}else{
		$msg = array("result" => "Area id empty");
		echo json_encode($msg);
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit-button").click(function(){
			var  data = "";
			var area_id = "<?php echo $area_id; ?>";
			if($("#customRadio_1").is(":checked")){
				data = 1;
			}else{
				data = 2;
			}
			var a_tag =  "<a href='check_book_status.php?area_id="+area_id+"&vehicle_id="+data+"'>Go Next</a>";
			//var a_tag =  'hi';
			$("#go-next").html(a_tag);
		});
	})
</script>

