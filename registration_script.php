<?php
 ?>
<script type="text/javascript">
       $(document).ready(function() { 
           formRegister();
		   <?php if(AUTOMATIC_CREATE_FIELDS_FROM_FORM==true) { echo "check();"; } 
		   ?>
           function	formRegister() {
                $(".container").fadeIn();
				var options = { 
                    target       :  '.<?php echo $this->target_element; ?>',
                    timeout      :    <?php echo $this->timeout;?>,    
                    beforeSubmit :   request,  
                    success      :   response  
                }; 
               $('.<?php echo $this->form_element;?>').submit(function() {  $(this).ajaxSubmit(options); return false;});  
			     $('.<?php echo $this->form_element;?>').validate(); 
                function request(formData, jqForm, options) { 
                    valid = true;
                    $('.<?php echo $this->wait_element; ?>').hide();
                    var label = "<span class='ajax_spinner'><img src='files/ispinner.gif'/><?php echo $this->wait_text;?></span>";
                    $(".<?php echo $this->wait_element; ?>").after(label);
                    $('.<?php echo $this->notify_element; ?>').hide();						
                    var valid = jqForm.valid(); 	
					if(valid) {
                      return true;
                    } else { 
                     $('.<?php echo $this->wait_element; ?>').show();
					 $('.ajax_spinner').fadeOut();
					 $(".ajax_spinner").remove();
					 $('.<?php echo $this->notify_element; ?>').fadeIn(); 
                      return false;
                    } 
                } 
                function response(responseText, statusText) {
				   $('.<?php echo $this->wait_element; ?>').show();
                   $('.ajax_spinner').fadeOut();
				   $(".ajax_spinner").remove();	
				 }
            }		
			   function check() {
						var $inputs = $('.ajax_form input, .ajax_form textarea, .ajax_form select');
						var values  = '';
						$inputs.each(function(i, el) {
						   values   = values+'"'+this.name+'",'; 
						});
						$.post("register.php", { 'fields[]': [values] });
						  
			   }
		 }); 
		
				
 </script>
 