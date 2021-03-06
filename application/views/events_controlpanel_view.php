<!-- This form has been replaced by the vanilla register form, even more secure and reliable ~Kenny -->
<aside id="controlpanel" class="col-md-3 pull-right">
	
    <div class="col-md-10 pull-left selected">
        <div class="row">
<!--
        	<div class="row">
		        <div class="col-xs-12">
		             <input type="button" class="btn btn-block btn-lg" id="AddEventButton" value="Add New Event +">
		             <br/>
		        </div>
		    </div>-->

            <div class="col-md-12 pull-right" id="AddEventForm">
            	<?php echo form_open_multipart('events/addevent'); ?>
                  <h3 style="margin-bottom:25px;">New Event:</h3>  
                <?php echo validation_errors('<p class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'); ?> </p>
                <?php
				if ($this -> session -> flashdata('error') != FALSE) {
					echo "<p class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
					echo $this -> session -> flashdata('error');
					echo "</p>";
				}
 				?>
                <?php
				if ($this -> session -> flashdata('success') != FALSE) {
					echo "<p class=\"alert alert-dismissable alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
					echo $this -> session -> flashdata('success');
					echo "</p>";
				}
                ?>
             <p>

            </p> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input value="<?php echo set_value('Title'); ?>" type="text" name="title" id="title" class="form-control input-lg" placeholder="Title" tabindex="6" required>
                        </div>
                    </div>
                </div>
            	<div class="row">
                  	<div class="col-md-12">              		
		                <div class="form-group" style="margin-top:20px;">
		                	<?php $this -> load -> helper('date'); ?>
			                <select class="selectpicker" data-width="32%" name="date_day"><option value="0">Day:</option><?php echo generate_options(1, 31) ?></select>
			                <select class="selectpicker" data-width="32%" name="date_month"><option value="0">Month:</option><?php echo generate_options(1, 12) ?></select>
			                <select class="selectpicker" data-width="32%" name="date_year"><option value="0">Year:</option><?php echo generate_options(date("Y"), date("Y")+10) ?></select>
		              	</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input value="00:00" type="time" name="time" id="time" class="form-control input-lg" placeholder="Time" tabindex="1" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        	<div id="locationField">
								<input id="address" name="address" class="form-control input-lg" placeholder="Enter the event address" onFocus="geolocate()" type="text" required></input>
							</div>
							<div id="map-canvas" class="col-md-12 form-control form-group" style="height:345px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12">
			            <div class="form-group">
                        	<textarea rows="6" style="resize: vertical; padding-top:10px;" value="<?php echo set_value('Description'); ?>" type="text" name="description" id="description" class="form-control input-lg" placeholder="description" tabindex="7" required></textarea>
                  		</div>
                    </div>     
                </div>
	            <div class="row">
	                <div class="col-md-12">
			            <div class="input-group">
			                <span class="input-group-btn">
			                    <span class="btn btn-file">
			                        Browse&hellip; <input type="file" name="picture">
			                    </span>
			                </span>
			                <input type="text" id="browse" class="form-control" readonly>
			            </div>
			            <span class="help-block">
               				 Select a picture cover for the event. Prefered minimum width = 840px
           			 	</span>
	                   <input type="submit" class="btn btn-block btn-lg" value="Create">
	                   <br/>
	                </div>
	                <?php echo form_close(); ?>
	            </div>
            </div>
        </div>
    </div>
</aside>