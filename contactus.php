<div class='contact_container'>

<?php
require 'headerx.php';

?>

<br>

<link rel='stylesheet' href='contact.css'>

<meta content="width=device-width, initial-scale=1.0" name="viewport">

<script>
//to change the link in the header
    
    var x = document.getElementById('invest');
			//x.style.color='red';

    x.setAttribute("href", "index.php#investment");


</script>



<script src="https://kit.fontawesome.com/7c1792080b.js" crossorigin="anonymous"></script>




<section class='contact_form'>

<!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_two_columns_responsive-->

<div class='need_prof'>
<button type='button'>NEED A PROFESSIONAL?</button>

</div>
<div class='contact_us'>
Contact Us
</div>


<div class='row'>


<div class='column'>

<div class='address_bar'>
<div class='address_details'>

<div class='addr_icon'><i class="fas fa-map-marker-alt fa-2x" style='margin-top:8px; color:#106eea;'></i></div>

<div class='addr'>Our Address </div>

<div class='main_addr'>
1450 E Main Street,
Apt 307 Hazard, KY 41701
United States of America 
</div>

</div>


</div>
</div>





<div class='column'>

<div class='contact_column'>

<div class='email_column'>
<div class='email_details'>

<div class='email_icon'><i class="far fa-envelope fa-2x" style='margin-top:8px; color:#106eea;'></i></div>
<div class='email_us'>Email Us</div>
<div class='email_r'>support@yourmccluredesigns.org</div>

</div>

</div>

<div class='phone_number'>

<div class='email_column'>
<div class='email_details'>

<div class='email_icon'><i class="fas fa-phone fa-2x" style='margin-top:8px; color:#106eea;'></i></div>
<div class='email_us'>Call Us</div>
<div class='email_r'>
	<!-- +1 659 977 0023 -->
	+1 606 223  6220
</div>

<i ></i>

</div>

</div>





</div>

</div>

</div>


</div>





<div class='row'>
<div class='column'>
<div class='google_addr'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176.2140230404993!2d-83.18104404964383!3d37.24262925027134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8844c8c457b9885d%3A0x34bb7bbe3fb8e0a5!2s1450%20E%20Main%20St%20%23307%2C%20Hazard%2C%20KY%2041701%2C%20USA!5e0!3m2!1sen!2sng!4v1666608966663!5m2!1sen!2sng" width="99%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</div>


<div class='column'>



<div class='form_data1'>
<div class='column_name'>
<input type='text' id='name' placeholder='  Your Name' onblur="this.placeholder=' Your Name'" onfocus="this.placeholder=''" >

</div>
<br>

<div class='column_email'>
<input type='email' id='email' placeholder='  Your Email' onblur="this.placeholder=' Your Email'" onfocus="this.placeholder='' ">

</div>

<br>

</div>


<div class='subject'>
<input type='text' id='subject' placeholder='  Subject' onblur="this.placeholder=' Subject'" onfocus="this.placeholder='' ">

</div>

<div class='message'>
<textarea id='message'placeholder='  Message' onblur="this.placeholder=' Message'" onfocus="this.placeholder='' " cols='' rows='17'>


</textarea>
</div>

<div class='submit'>

<button type='button' onclick='share()'> Send Message </button>

</div>






<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   <script> 
   //testimonial javascript validation and ajax testimonial form submission  
   
   function share(){
	    
	  var name_value = document.getElementById('name').value; 
	   
		var email_value = document.getElementById('email').value; 
	  
	  var subject_value = document.getElementById('subject').value; 
	  
	  var message_value = document.getElementById('message').value;
	  
	  var date = new Date();
	  
	  
	  
	  if ((name_value) == ''){
		  document.getElementById('name').style.borderColor = 'red';
		  
	  }
	  
	    else if ((email_value) == ''){
		   document.getElementById('email').style.borderColor = 'red';
		  
	  }
	
	   else if ((subject_value) == ''){
		   document.getElementById('subject').style.borderColor = 'red';
		  
	  }
	  
	   else if ((message_value.length < 10) || (message_value == "")){
		 document.getElementById('message').style.borderColor = 'red';
		  
	  }
	
	else{
		
		
		
		
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200){

		
		document.getElementById('email').value = "";
		
		document.getElementById('name').value = "";
		
		document.getElementById('subject').value = "";
		
		document.getElementById('message').value = "";
		
		swal('Thanks for contacting us', "We will reply you shortly");
		


	}


}

	xmlhttp.open('GET', 'submit_contact.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
	xmlhttp.send();






	}
		
		
	
   }
   
   
   </script>
  
  



























</div>














</div>


</section>




<br>
<?php
require 'footer2.php';

?>
</div>


