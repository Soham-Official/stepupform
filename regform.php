<?php
include 'database.php';
if(isset($_POST['regbtn']))
{
$nam=$_POST['nam'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$f=$_POST['f'];
$m=$_POST['m'];
$s=$_POST['s'];
$c=$_POST['c'];
$a=$_POST['a'];
$r=$_POST['r'];
//$t=time();

//$cpic=$_FILES['cpic'];
//$cpath=$cpic['tmp_name'];
//$cname=$t.$nam;
//$cdest='cam/'.$cname;

//move_uploaded_file($cpath,$cdest);



//$mpic=$_FILES['mpic'];
//$mpath=$mpic['tmp_name'];
//$mname=$t.$nam;
//$mdest='mob/'.$cname;

//move_uploaded_file($mpath,$mdest);


$password=$_POST['password'];
$repassword=$_POST['repassword'];

   //echo $password;
   //echo $repassword;
   //echo $nam;
   //echo "hi";
//echo("<script>console.log(nam)</script>");
//echo hi.$nam;
$insert="INSERT INTO nam SET name='$nam',email='$email',mobile='$mobile',gender='$gender',fathersname='$f',mothersname='$m',school='$s',class='$c',reference='$r',dob='$dob',address='$a',password='$password',repassword='$repassword'";
//,gender='$gender',dob='$dob',fathersname='$f',mothersname='$m',school='$s',class='$c',reference='$r'";
$connection->query($insert);
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  .has-noerror{
      background-color:#3bbf7d;
  }
  </style>
 </head>
 <body>
 <br />
  <div class="container box">
   <br />
   <h2 align="center">Register Here</h2><br />
   <?php echo $message; ?>
   <form method="post" id="register_form" enctype="multipart/form-data">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">User Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Upload Image</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">User Details</div>
       <div class="panel-body">

        <div class="form-group">
            <label>Enter Your Name</label>
            <input type="text" name="nam" id="name" class="form-control" />
            <span id="error_name" class="text-danger"></span>
        </div>

        <div class="form-group">
          <label>Enter Your Email Id</label>
          <input type="text" name="email" id="email" class="form-control" />
          <span id="error_email" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label>Enter Your Mobile No:</label>
            <input type="number" name="mobile" id="mobile" class="form-control" />
            <span id="error_mobile" class="text-danger"></span>
        </div> 
        <div class="form-group">
            <label>Gender</label><br>
            <label class="radio-inline">
             <input type="radio" name="gender" value="male" checked> Male
            </label>
            <label class="radio-inline">
             <input type="radio" name="gender" value="female"> Female
            </label>
           </div>
        <div class="form-group">
            <label>Enter Your Date Of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" />
            <span id="error_dob" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Personal Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Father's Name</label>
         <input type="text" name="f" id="fname" class="form-control" />
         <span id="error_fname" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Mother's Name</label>
         <input type="text" name="m" id="mname" class="form-control" />
         <span id="error_mname" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label>School Name</label>
            <input type="text" name="s" id="sname" class="form-control" />
            <span id="error_sname" class="text-danger"></span>
           </div>
           <div class="form-group">
            <label>Class</label>
            <select name="c" class="form-control" id="cname">
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            <span id="error_cname" class="text-danger"></span>
           </div>  
           <div class="form-group">
            <label>Address</label>
            <textarea name="a" id="aname" class="form-control" ></textarea>
            <span id="error_aname" class="text-danger"></span>
           </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Set Password</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Reference</label>
         <input type="text" class="reference form-control" id="reference" name="r" placeholder="Form where have you got the information about this event?">
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Create Password</label>
         <input type="password" class="form-control" id="password" name="password"  />
         <span id="error_password" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Re-enter Password</label>
         <input type="password" class="form-control" id="repassword" name="repassword"  />
         <span id="error_repassword" class="text-danger"></span>
        </div>
        <!--<div class="form-group">
         <label>Mobile Photography Category(*png,*jpg,*jpeg)</label>
         <input type="file" name="mpic" id="mpic" class="form-control" />
         <span id="error_mpic" class="text-danger"></span><br>
         <button type="button" id="mpicupload" class="btn btn-success">Upload</button>
         
        </div>
        <div class="form-group">
            <label>Camera Photography Category(*png,*jpg,*jpeg)</label>
            <input type="file" name="cpic" id="cpic" class="form-control" />
             <span id="error_cpic" class="text-danger"></span><br>
            <button type="button" id="cpicupload" class="btn btn-success">Upload</button>
           
           </div>-->
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="regbtn" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
  </div><h4 align="center">Already have a account?Login <a href=login.php>here</a></h4>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var error_name = '';
  var error_mobile='';
  var error_dob='';
  var error_aname='';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  //Email validation//
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  //name validation//
  if($.trim($('#name').val()).length == 0)
  {
   error_name = 'Name is required';
   $('#error_name').text(error_name);
   $('#name').addClass('has-error');
  }
  else
  {
   error_name = '';
   $('#error_name').text(error_name);
   $('#name').removeClass('has-error');
  }
//mobile validation//
if($.trim($('#mobile').val()).length == 0)
  {
   error_mobile = 'Mobile No is required';
   $('#error_mobile').text(error_mobile);
   $('#mobile').addClass('has-error');
  }
  else
  {
   if($.trim($('#mobile').val()).length != 10) 
   {
    error_mobile = 'Invalid Format';
   $('#error_mobile').text(error_mobile);
   $('#mobile').addClass('has-error');
   }  
  else  
  {
       error_mobile = '';
   $('#error_mobile').text(error_mobile);
   $('#mobile').removeClass('has-error');
  }
  }
//dob validation//
if($.trim($('#dob').val()).length == 0)
  {
   error_dob = 'Date Of Birth is required';
   $('#error_dob').text(error_dob);
   $('#dob').addClass('has-error');
  } 
  else
  {
   error_dob = '';
   $('#error_dob').text(error_dob);
   $('#dob').removeClass('has-error');
  }

  if(error_email != '' || error_name != ''||error_mobile !=''||error_dob!='')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_fname = '';
  var error_mname = '';
  var error_sname='';
  var error_aname='';
  
  //fathername validation//
  if($.trim($('#fname').val()).length == 0)
  {
   error_fname = "Father's Name is required";
   $('#error_fname').text(error_fname);
   $('#fname').addClass('has-error');
  }
  else
  {
   error_fname = '';
   $('#error_fname').text(error_fname);
   $('#fname').removeClass('has-error');
  }
  //mothersname validation//
  if($.trim($('#mname').val()).length == 0)
  {
   error_mname = "Mother's Name is required";
   $('#error_mname').text(error_mname);
   $('#mname').addClass('has-error');
  }
  else
  {
   error_mname = '';
   $('#error_mname').text(error_mname);
   $('#mname').removeClass('has-error');
  }
  //school name validation//
  if($.trim($('#sname').val()).length == 0)
  {
   error_sname = "School Name is required";
   $('#error_sname').text(error_sname);
   $('#sname').addClass('has-error');
  }
  else
  {
   error_sname = '';
   $('#error_sname').text(error_sname);
   $('#sname').removeClass('has-error');
  }
 //address verification//
 if($.trim($('#aname').val()).length == 0)
  {
   error_aname = "Address is required";
   $('#error_aname').text(error_aname);
   $('#aname').addClass('has-error');
  }
  else
  {
   error_aname = '';
   $('#error_aname').text(error_aname);
   $('#aname').removeClass('has-error');
  }

  if(error_fname != '' ||error_aname !='' ||error_sname !='' || error_mname!='')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 /*$('#cpicupload').click(function(){
     var error_cpic = '';
     var error_mpic = '';
     var error_cpicext='';
     var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
     //var cpic=$('#cpic').val();
  //console.log("hm");
  if($.trim($('#cpic').val()).length == 0)
  {
   error_cpic = 'Cannot be Empty';
   $('#error_cpic').text(error_cpic);
   $('#cpic').addClass('has-error');
  }
   else if($.inArray($('#cpic').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
   {
          //console.log($('#cpic').val().split('.').pop().toLowerCase());
          error_cpicext = 'Invalid Extension';
          $('#error_cpic').text(error_cpicext);
         $('#cpic').addClass('has-error');
    }
  else
  {
     error_cpicext = '';  
   error_cpic = 'Succefully Updated';
   $('#error_cpic').text(error_cpic);
   $('#cpic').removeClass('has-error');
    $('#cpic').addClass('has-noerror');
    error_cpic ='';
  }
 })
 $('#mpicupload').click(function(){
      var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
     var error_cpic = '';
  var error_mpic = '';
  var error_cpicext='';
  //console.log("hm");
  if($.trim($('#mpic').val()).length == 0)
  {
   error_mpic = 'Cannot be Empty';
   $('#error_mpic').text(error_mpic);
   $('#mpic').addClass('has-error');
  }
   else if($.inArray($('#mpic').val().split('.').pop().toLowerCase(), fileExtension) == -1) 
   {
          console.log($('#mpic').val().split('.').pop().toLowerCase());
          error_mpicext = 'Invalid Extension';
          $('#error_mpic').text(error_mpicext);
         $('#mpic').addClass('has-error');
    }
  else
  {
      error_mpicext='';
   error_mpic = 'Succefully Updated';
   $('#mpic').removeClass('has-error');
   $('#error_mpic').text(error_mpic);
   $('#mpic').addClass('has-noerror');
   error_mpic=''
  }
 })
 if(error_mpic !='' || error_cpic!='' ||cpicext!=''||mpicext!='')
 return false;
 */
 $('#btn_contact_details').click(function(){
 
  //console.log($('#repassword').val());
  if($('#repassword').val()!=  $('#password').val())  
    {
    error_repassword='Password not matched';
    error_password = 'Password not matched';
     $('#error_repassword').text(error_repassword);
   $('#repassword').addClass('has-error');
    $('#error_password').text(error_password);
   $('#password').addClass('has-error');
    }
   else{
         
   $('#error_repassword').text(error_repassword);
   $('#repassword').removeClass('has-error');
   
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
       error_repassword = '';
        error_password = '';
   }
  var error_password='';
  var error_repassword='';
  if($.trim($('#password').val()).length == 0)
  {
   error_password = "Password is required";
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }
   if($.trim($('#repassword').val()).length == 0)
  {
   error_repassword= "Re-password is required";
   $('#error_repassword').text(error_repassword);
   $('#repassword').addClass('has-error');
  }
  
  else
  {
   error_repassword = '';
   $('#error_repassword').text(error_repassword);
   $('#repassword').removeClass('has-error');
  }
   if(error_password!='' || error_repassword!='')
   return false;
   else{
   console.log($('#repassword').val());
   alert('Succesfully Registered');
  window.location.href='login.php';
 /* 
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 $.ajax({
      method:"POST",
      url:"regform.php",
      data:{},
      dataType:"html",
      success:function(data){  
           alert(data);
         
          window.location.href='login.php'; 
       
       
      
      }
    });*/

   
 
 }
}); 
});
</script>