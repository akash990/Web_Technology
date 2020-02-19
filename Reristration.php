<html>
<head></head>
	<body>

    	
<?php
        $err_fname="";
        $fname="";
        $err_lname="";
        $lname="";
        $err_email="";
        $email="";
        $err_phone="";
        $phone="";
        $err_address1="";
        $address1=""; 
        $err_address2="";
        $address2="";
        $err_addresscity="";
        $addresscity="";
        $err_addressstate="";
        $addressstate="";
        $err_addresszip="";
        $address1zip="";

        $err_db="";
        $db="";
        $err_about="";
        $about="";
        

        if(isset($_POST['submit']))
        {
            print_r($_POST);
            if(empty($_POST['fname']))
            {
                $err_fname="* Frst Name Required";

            }
           else
           {
               $fname=htmlspecialchars($_POST['fname']);
                
           }


           if(empty($_POST['lname']))
           {
               $err_lname="* Last Name Required";

           }
          else
          {
              $lname=htmlspecialchars($_POST['lname']);
              echo $lname;
          }



          if(empty($_POST['email']))
          {
              $err_email="* Email Required";

          }
         else
         {
             $email=htmlspecialchars($_POST['email']);
             echo $email;
         }

         if(empty($_POST['phone']))
         {
             $err_phone="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['phone']);
            echo $err_phone;
        }


        if(empty($_POST['address1']))
         {
             $err_address1="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['address1']);
            echo $err_address1;
        }


        if(empty($_POST['address2']))
         {
             $err_address2="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['address2']);
            echo $err_address2;
        }

        if(empty($_POST['err_addresscity']))
         {
             $err_addresscity="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['addresscity']);
            echo $err_addresscity;
        }





        if(empty($_POST['addressstate']))
         {
             $err_addressstate="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['addressstate']);
            echo $err_addressstate;
        }


        if(empty($_POST['address1zip']))
         {
             $err_address1zip="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['address1zip']);
            echo $err_address1zip;
        }

        if(empty($_POST['lname']))


        if(empty($_POST['db']))
         {
             $err_db="* Phone Number Required";

         }
        else
        {
            $phone=htmlspecialchars($_POST['db']);
            echo $err_db;
        }
        }
?>

     <h1>Club Membership Registration System</h1>
     <h3>Complete The form below to sign up for our membership service </h3>
		<form action="#" method="post">
        <table>
          <tr>
             <td>
                  <lable><b>Name<b>:</lable>
             </td>
             <td>
             
             <input type="text" name="fname"  value="<?php echo $fname;?>" fname="fname">
             <br>
             <span>First Name</span>
             <span style="color:red"><?php echo $err_fname;?></span>
             </td>
             <td>
             <input type="text" name="fname"  value="<?php echo $lname;?>" lname="lname" > <br>
             <span>Last Name</span>
             <span style="color:red"><?php echo $err_lname;?></span>

             </td>
          
          
          </tr>

          <tr>
             <td>
                  <lable><b>Email:<b>:</lable>
             </td>
             <td>
             
             <input type="text" name="email" value="<?php echo $email;?>" placeholder="example@example.com" ><br>
             <span>example@example.com</span>
             <sapn style="color:red"><?php echo $err_email;?></span>

             </td>
                       
          
        <tr>   
        <tr>
            <td>
                  <lable><b>Phone:<b>:</lable>

                  
             </td>
            
             <td>
             <input type="number" name="phone"><br>
             <span>Area Code</span>
             <span style="color:red"><?php echo $err_phone;?></span>

             </td>

             <td>
             <input type="number" name="phone" ><br>
             <span>phone Number</span>
             <span style="color:red"><?php echo $err_phone;?></span>

             </td>

        <tr>


          <tr>
             <td>
                  <lable><b>Address:<b>:</lable>

                  
            
            <tr>
               <td></td>
            </tr>
            
             <tr>
             </td>
             <td>
             <input type="text" name="address1"><br>
             <span>street Address</span>
             <span style="color:red"><?php echo $address1;?></span>
             <br>
             <input type="text" name="address2"><br>
             <span>street Address Line 2</span>
             <span style="color:red"><?php echo $err_address2;?></span>
             <br>
             <input type="text" name="addresscity"><br>
             <span>City</span>

             </td>
            <tr>
             
             

             <td>
             

             </td>

             <td>
             <input type="text" name="addressstate"><br>
             <span>Stret/Provice</span>
             <span style="color:red"><?php echo $err_addressstate;?></span>

             </td>

             <td>
             <input type="text" name="address1zip"><br>
             <span>Postal/ZIP</span>
             <span style="color:red"><?php echo $err_addresszip;?></span>

             </td>
          
          
          </tr>


          <tr>
             <td>
                  <lable><b>Birth Date:<b>:</lable>
             </td>
             <td>
             
             <select name="profession">
				<option>Teacher</option>
				<option selected="selected">Student</option>
				<option>Govt. JOb</option>
			</select>
            <select name="profession">
				<option>Teacher</option>
				<option selected="selected">Student</option>
				<option>Govt. JOb</option>
			</select>
            <select name="profession">
				<option>Teacher</option>
				<option selected="selected">Student</option>
				<option>Govt. JOb</option>
			</select><br>

             </td>
             

             </td>



            </tr>
			 

            <tr>
             <td>
                  <lable><b>Where did you hear<br> about us:<b>:</lable>
             </td>
             <td>
             
             <input type="checkbox" name="hobbies[]" value="Movies" > Movies <input type="checkbox" name="hobbies[]" value="Music"> Music <input type="checkbox" name="hobbies[]" value="Games"> Games <br>
             
             </td>
            

            </tr>

            <tr>

            <td>
            

             </td>
             <td>

            

             </td>


            </tr>
            <tr>
              <td colspan="2" align="Center">
              <input type="submit" name="submit" value="Submit">


            </tr>
			 

			
			



        </table>   
			
		</form>
	</body>
</html>