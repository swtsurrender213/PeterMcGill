<?php

add_action('partist_request_submit','contact_admin');

//insert contact information into the database
function insert_request_info(){

//get the five variables 
//prepare variables
//wp_strip_all_tags will remove spaces and illegal characters

 $fullname =  wp_strip_all_tags($_POST['fullname']);
 $phone=trim($_POST['phone']);
 $member= wp_strip_all_tags($_POST['member']);
 $painting= wp_strip_all_tags($_POST['painting']);
 
 
 
 // Create post object
$request_post = array(
  'post_title'    => $fullname,
  'post_status'   => 'publish',
  'post_type'     => 'request',
);

// Insert the post into the wp_post table and get the id
$post_id=wp_insert_post($request_post);


//Insert into the postmeta table
add_post_meta($post_id, 'fullname', $fullname);
add_post_meta($post_id, 'phone',$phone);
add_post_meta($post_id, 'member', $member);
add_post_meta($post_id, 'painting', $painting);

}

//hooking into the do_action on submit
add_action('partist_request_submit','insert_request_info');


//the website

add_action('partist_contact_submit','contact_admin');

function contact_admin(){

$admin_email=get_option( 'admin_email' );

//email,subject,message
//wp_mail( $admin_email, 'New Contact', 'website had been contacted');

}

//insert contact information into the database
function insert_contact_info(){

//get the five variables 
//prepare variables
//wp_strip_all_tags will remove spaces and illegal characters

 $fname =  wp_strip_all_tags($_POST['fname']);
 $lname =  wp_strip_all_tags($_POST['lname']);
 $email=   wp_strip_all_tags($_POST['email']);
 $phone=trim($_POST['phone']);
 // two parameters of any name of the filter and what you want to filter
 //define the filter
 
 $message= wp_strip_all_tags($_POST['message']);
 
 
 $fullname= $lname.' '.$fname;
 
 
 // Create post object
$contact_post = array(
  'post_title'    => $fullname,
  'post_status'   => 'publish',
  'post_type'     => 'contact',
);

// Insert the post into the wp_post table and get the id
$post_id=wp_insert_post($contact_post);


//Insert into the postmeta table
add_post_meta($post_id, 'first_name', $fname);
add_post_meta($post_id, 'last_name', $lname);
add_post_meta($post_id, 'email', $email);
add_post_meta($post_id, 'telephone',$phone);

$message=apply_filters('clean_message',$message);
add_post_meta($post_id, 'message', $message);

}

//hooking into the do_action on submit
add_action('partist_contact_submit','insert_contact_info');

//reqest form
function show_request_form($error="")
{ 

if($error!=""){
echo '<div class="alert alert-danger centered">'.$error.'</div>';
} ?>

<div class="container">

<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    <div class="row">
        <div class="col-md-12">
            <div id="formwrapper" class="well well-sm">
                <form class="form-horizontal" method="post" action="">
                    <fieldset>
                        <legend class="text-center header">Request Form</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
								<?php 
								if(isset($_POST['fullname'])) 
								echo '<strong>Full Name:</strong> <input id="fullname" name="fullname" type="text" value="'.$_POST['fullname'].'" class="form-control">'; 
								else
								echo '<strong>Full Name:</strong> <input id="fullname" name="fullname" type="text" placeholder="full Name" class="form-control">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
								 <?php 
								if(isset($_POST['phone'])) 
								echo '<strong>Phone:</strong> <input id="phone" name="phone" type="text" value="'.$_POST['phone'].'" class="form-control">'; 
								else
								echo '<strong>Phone:</strong> <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
								 <?php 
								if(isset($_POST['member'])){
									if ($_POST['member']=="Yes"){							
										echo '<input type="checkbox" name="member" value="Yes" checked="checked">Yes<br>';
										echo '<input type="checkbox" name="member" value="No">No<br>';
										}
									else{
										echo '<strong>Member:</strong>  <input type="checkbox" name="member" value="Yes">Yes&nbsp';
										echo '<input type="checkbox" name="member" value="No" checked="checked">No';
									}
								}
								else{
									echo '<strong>Member:</strong> <input type="checkbox" name="member" value="Yes">Yes&nbsp';
									echo '<input type="checkbox" name="member" value="No">No'; 	
								} ?> <br><br>		

								<div class="form-group">
                            <i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
								 <?php 
								if(isset($_POST['painting'])) 
								echo '<strong>Which Painting:</strong> <textarea class="form-control" id="painting" name="painting" rows="7">'.$_POST['painting'].'</textarea>'; 
								else
								echo '<strong>Which Painting:</strong> <textarea class="form-control" id="painting" name="painting" placeholder="Order your favorite painting for us know here. We will get contact you as we can." rows="7"></textarea>';
								?>
                            </div>
                        </div><br>
							 </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button name="request-submit" type="submit" class="btn btn-primary btn-lg">
								Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
}


function show_contact_form($error="")
{ 

if($error!=""){
echo '<div class="alert alert-danger centered">'.$error.'</div>';
} ?>

<div class="container">
<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    <div class="row">
        <div class="col-md-12">
            <div id="formwrapper" class="well well-sm">
                <form class="form-horizontal" method="post" action="">
                    <fieldset>
                        <legend class="text-center header">Contact The Artist</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
								<?php 
								if(isset($_POST['fname'])) 
								echo '<input id="fname" name="fname" type="text" value="'.$_POST['fname'].'" class="form-control">'; 
								else
								echo '<input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">';
								?>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <?php 
								if(isset($_POST['lname'])) 
								echo '<input id="lname" name="lname" type="text" value="'.$_POST['lname'].'" class="form-control">'; 
								else
								echo '<input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
								  <?php 
								if(isset($_POST['email'])) 
								echo '<input id="email" name="email" type="text" value="'.$_POST['email'].'" class="form-control">'; 
								else
								echo ' <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
								 <?php 
								if(isset($_POST['phone'])) 
								echo '<input id="phone" name="phone" type="text" value="'.$_POST['phone'].'" class="form-control">'; 
								else
								echo '  <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
								 <?php 
								if(isset($_POST['message'])) 
								echo '<textarea class="form-control" id="message" name="message" rows="7">'.$_POST['message'].'</textarea>'; 
								else
								echo '<textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you as we can." rows="7"></textarea>';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button name="contact-submit" type="submit" class="btn btn-primary btn-lg">
								Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
}

//request form
function check_show_request_form_error(){

//no errors to start
 $error="";
    
	//trim first name to remove spaces
	$fullname=trim($_POST['fullname']);
	
	if ($fullname!= "") {
	    //santize to remove any illegal characters
        $fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
	    //after the first name has been sanitized make sure 
		//it is not blank
		if ($fullname == "") {
			$error .= 'Please enter a valid full name.<br/><br/>';
		}
	} else {
    $error .= 'Please enter your full name.<br/>';
	}
		
	//phone number
	$phone=trim($_POST['phone']);
	//regular expression
	$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";	
	
	if($phone != ''){
	  //validate the phone number
		if(!preg_match($regex, $phone)){
		$error .= 'Please enter a valid phone number.<br>';
		}
	} else {
		
	$error .= 'Please enter your phone number.<br/>';}
    
	
	
	//message
	$member=trim($_POST['member']);
	
	if ($member!= "") {
    $member = filter_var($member, FILTER_SANITIZE_STRING);
	//after the message has been sanitized make sure it is not blank
		if ($member == "") {
			$error .= 'Please enter a valid member.<br/><br/>';
		}
	} else {
    $error .= 'Please enter a your member user .<br/>';
	}
	
	
	//message
	$painting=trim($_POST['painting']);
	
	if ($painting!= "") {
    $painting = filter_var($painting, FILTER_SANITIZE_STRING);
	//after the message has been sanitized make sure it is not blank
		if ($painting == "") {
			$error .= 'Please enter a valid painting.<br/><br/>';
		}
	} else {
    $error .= 'Please enter a your painting .<br/>';
	}
	
	
	
return $error;	

}


function check_show_contact_form_error(){

//no errors to start
 $error="";
    
	//trim first name to remove spaces
	$fname=trim($_POST['fname']);
	
	if ($fname!= "") {
	    //santize to remove any illegal characters
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
	    //after the first name has been sanitized make sure 
		//it is not blank
		if ($fname == "") {
			$error .= 'Please enter a valid first name.<br/><br/>';
		}
	} else {
    $error .= 'Please enter your first name.<br/>';
	}
	
	
	//trim last name
	$lname=trim($_POST['lname']);
	
	if ($lname!= "") {
    $lname = filter_var($lname, FILTER_SANITIZE_STRING);
	//after the last name has been sanitized make sure it is not blank
		if ($lname == "") {
			$error .= 'Please enter a valid first name.<br/><br/>';
		}
	} else {
    $error .= 'Please enter your last name.<br/>';
	}
	
	
	//trim email
	$email=trim($_POST['email']);
	//if not equal to a blank
	if ($email != "") {
	//remove any illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
	//check if the email address is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error .= "$email is <strong>NOT</strong> a valid 
			email address.<br/><br/>";
		}
    } else {
    $error .= 'Please enter your email address.<br/>';
    }
	
	
	//phone number
	$phone=trim($_POST['phone']);
	//regular expression
	$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";	
	
	if($phone != ''){
	  //validate the phone number
		if(!preg_match($regex, $phone)){
		$error .= 'Please enter a valid phone number.<br>';
		}
	} else {
		
	$error .= 'Please enter your phone number.<br/>';}
    
	
	
	//message
	$message=trim($_POST['message']);
	
	if ($message!= "") {
    $message = filter_var($message, FILTER_SANITIZE_STRING);
	//after the message has been sanitized make sure it is not blank
		if ($message == "") {
			$error .= 'Please enter a valid message.<br/><br/>';
		}
	} else {
    $error .= 'Please enter a message.<br/>';
	}
	
	
return $error;	

}

