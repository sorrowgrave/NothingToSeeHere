<!-- This form has been replaced by the vanilla register form, even more secure and reliable ~Kenny -->
<div id="controlpanel">
    <div class="col-md-cust1 selected">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                  <h2 style="margin-bottom:25px;">New Event:</h2>  
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
                  	<div class="col-xs-6 col-sm-6 col-md-6">
                		<?php $this -> load -> helper('date'); ?>
		                <div class="form-group" style="margin-top:20px;">
			                <select class="selectpicker" data-width="32%" name="day"><option value="0">Day:</option><?php echo generate_options(1, 31) ?></select>
			                <select class="selectpicker" data-width="32%" name="month"><option value="0">Month:</option><?php echo generate_options(1, 12) ?></select>
			                <select class="selectpicker" data-width="32%" name="year"><option value="0">Year:</option><?php echo generate_options(date("Y"), date("Y")+10) ?></select>
		              	</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="00:00" type="time" name="time" id="time" class="form-control input-lg" placeholder="Time" tabindex="1" required>
                        </div>
                    </div>
                </div>
            	<div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="<?php echo set_value('title'); ?>" type="text" name="title" id="title" class="form-control input-lg" placeholder="Title" tabindex="1" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                  	<div class="col-xs-6 col-sm-6 col-md-6">
                  		<div class="form-group">
                        	<textarea rows="5" value="<?php echo set_value('description'); ?>" type="text" name="description" id="description" class="form-control input-lg" placeholder="description" tabindex="2" required></textarea>
                       </div>
                    </div>
                </div>
	            <div class="row">
	                <div class="col-xs-6 col-md-6 pull-left form-group">
	                   <input type="submit" class="btn btn-block btn-lg" value="Create" />
	                   <br/>
	                </div>
	                <?php echo form_close(); ?>
	            </div>
            </div>
        </div>
    </div>
    </div>