<!DOCTYPE html>
<html>
    <?php
    require 'header.php';

    ?>


        
        <!--==============================Beginning of Main Image============================== -->


        <section class="main_image">

            <div class="main_text">
               <div class="main_sub_text">

                Welcome to   Yourmcclure Designs a Furniture and Interior Agency
               </div>
            </div>


        </section>

        
        <!--==============================End of Main Image============================== -->




        
        <!--==============================Beginning of Featured Category============================== -->

                <section class="featured_category_all">

                    <div class="featured_header">
                        INTERIOR DESIGN

                    </div>
                        



                    <section class="featured_category">


                        <div class="featured_sub1">

                        
                            
                            <div class="featured_sub1_1">
                                <p class='what_we_do'>What we do</p>
                                <p class='testimonials'><a href='testimonials.php'>Testimonials</a></p>

                            </div>

                            <div class="featured_sub1_2">

                                <p class="featured_sub1_2_1">
                                    <b>THE AWARD WINNING COMBINATION</b><br>

                                    In 2022 we revolutionised high end home decor by combining a first class interior 
                                    design service with our exclusive luxury furniture collection bringing a timeless 
                                    new aesthetic to design conscious home owners from United States to Qatar. During promotional 
                                    periods (check home page for offers), our award winning combination is available completely 
                                    free of charge for renovation projects of any size from a single room, feature wall or storage 
                                    solution to the furnishing of complete properties from 1 bedroomed apartments to 5 bedroomed houses. 
                                    Ready to discuss your options? <br><span class='contactus'><a href='contactus.php' >Contact us</a></span>  or call +1(606)223-6220.
                                </p>


                                <p class="featured_sub1_2_1">

                                    <b>THE BENEFITS OF A YOURMCCLURE & PARTNERS DESIGNED HOME:</b><br>

                                    Release your home's full potential<br>
                                    Maximise light and space with our cutting edge 'floating' products<br>
                                    Improve your home's ergonomics with expert furniture placement<br>
                                    Achieve a unique, minimalistic and timeless aesthetic that will always inspire and impress<br>
                                    Efficient, bespoke storage solutions designed and made specifically for your home<br>
                                    Add exclusivity, increase property value and improve your home's saleability<br>
                                    Potential to recoup your investment with products that retain their value<br>
                                    All products manufactured to strict 'Made in USA' standards<br>
                                </p>

                            </div>
                        



                        </div>



                        <div class="featured_sub2">
                         
                            <div class="fetured_sub2_1">

                            </div>

                            <div class="fetured_sub2_2">
                                <p class="get_started">LET'S GET STARTED</p>
                                <P class='call_reach'>CALL +1 606 223 6220 OR COMPLETE THE FORM BELOW</P>

                                <div class="contact">
                                <label>YOUR NAME</label><br>
                                <input class="contact_form" id='name' type="text"><br>
                                </div>

                                <div class="contact">
                                    
                                <label>YOUR E-MAIL ADDRESS</label><br>
                                <input class="contact_form" id='email' type="text"><br>

                                </div>

                                <div class="contact">
                                    
                                <label>YOUR PHONE NUMBER</label><br>
                                <input class="contact_form" id='number' type="number"><br>

                                </div>

                                <div class="contact">
                                    
                                <label>LOCATION / POSTCODE</label><br>
                                <input class="contact_form" id='postcode' type="number"><br>
                                </div>

                                <div class="contact">
                                    
                                    <label>MESSAGE</label><br>
                                    <textarea class='textarea' id='main_text'>

                                    </textarea><br>
                                </div>

                                <div class="contact_button">
                                    <input type="submit" onclick='submit_form()' value="Submit">
                                </div>




                                
                            </div>
                            
                        </div>


                        
<script src="jquery-3.3.1.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    function submit_form(){
                        //alert ('go on');
                        var name =document.getElementById('name').value;
                        var email =document.getElementById('email').value;
                        var number =document.getElementById('number').value;
                        var postcode =document.getElementById('postcode').value;
                        var main_text =document.getElementById('main_text').value;

                       if (name == ''){
                        document.getElementById('name').style.borderColor = 'red';
                       }else{

                        document.getElementById('name').style.borderColor = '';

                       }

                       if (email == ''){
                        document.getElementById('email').style.borderColor = 'red';
                       }else{
                        document.getElementById('email').style.borderColor = '';
                       }

                       if (number == ''){
                        document.getElementById('number').style.borderColor = 'red';
                       }else{
                        document.getElementById('number').style.borderColor = '';
                       }

                       if (postcode == ''){
                        document.getElementById('postcode').style.borderColor = 'red';
                       }else{
                        document.getElementById('postcode').style.borderColor = '';
                       }

                       if (main_text.length < 10){
                        document.getElementById('main_text').style.borderColor = 'red';
                       }

                     
                       //alert(name.length);

                       if((name.length > 0) & (email.length >0) & (number.length > 0) & (postcode.length >0) & (main_text.length >0) ){
                        swal('Thanks for contacting us', "We will reply you shortly");

                       }


                    }


                 


                </script>
                    


                    </section>

                    
                        

                </section>



        
        <!--==============================End of Featured Category============================== -->




        





        <!--==============================Beginning of Work Category============================== -->

        <section class="work_category_all">

            <div class="work_category">


                <div class="work_category1 first">
              
                </div>

                
                <div class="work_category1 second">
                    
                </div>

                
                <div class="work_category1 third">
                    
                </div>

                
                <div class="work_category1 fourth">
                    
                </div>

                <div class="work_category1 fifth">
                    
                </div>

    


            </div>









            <div class="work_category11">


                <div class="work_category12 sixth">

                </div>

                
                <div class="work_category12 seventh">
                    
                </div>

                
                <div class="work_category12 eight">
                    
                </div>

                
                <div class="work_category12 ninth">
                    
                </div>

                <div class="work_category12 tenth">
                    
                </div>

    


            </div>






            





        </section>








        
        <!--==============================End of Work Category============================== -->


        
        
        <!--==============================Beginning of Footer============================== -->

        <?php
        require 'footer2.php';


        ?>

        
        <!--==============================End of Footer============================== -->
        

    </body>
</html>