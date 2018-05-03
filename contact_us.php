 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
<meta name="author" content="">

<title>PascalCoin.com | Contact Us</title>

<?php include 'media.php';?>

</head>

<body id="home">

<?php include 'header.php';?>

<!-- FullScreen -->
<div class="intro-header intro-subheader">
       
        <div id="slider1_container">
        <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h3 class="breadcrumb-title">Contact Us</h3>
                            <ol class="breadcrumb">
        <li><a href="http://pascalcoin.org">Home</a></li>        
        <li class="active">Contact Us</li>
    </ol>
                        </div>
                    </div>
                </div>
        </div>
        
    

</div>

    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="abouthead wow animated zoomInDown animated animated">
                    <h3 class="section-heading">Contact Us</h3>
                    
                    <div class="mid-sep"><img src="img/footsep.png" alt=""></div></div>
                </div>

                <?php 
                        if(isset($_POST['contactus']))
                        {                             
                            $name=ucfirst(trim($_POST['name']));
                            $email=$_POST['email'];
                            $mob_no=$_POST['mob_no'];
                            $comment=trim($_POST['comment']);

                            if(!empty($name) && !empty($email) && !empty($mob_no) && !empty($comment)){
                                 if( !!filter_var($email, FILTER_VALIDATE_EMAIL) ) {      

                                    $clt_subject =     "PascalCoin: New Contact Message";

                                    $clt_content =     '<table border="0" cellpadding="0" cellspacing="0" width="600"  style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;width:600px; margin:20px auto;"><tr bgcolor="#000000"><td align="center" valign="top" width="100%"  style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><table border="0" cellpadding="10" cellspacing="0" width="100%" style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><tr align="center"><td><img src="'.BASE_URL.'img/logo-white.png" width="280" style="max-width:350px; margin-top: 30px; margin-bottom: 30px;" /></td></tr></table></td></tr><tr bgcolor="#f5f5f5"><td align="center" valign="top" width="100%" class="templateColumnContainer"><table border="0" cellpadding="10" cellspacing="0" width="100%" style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><tr><td class="templateColumnContainer" style="padding:0px 20px;"><p></p><p style="font-size:16px; margin-bottom:5px;"><strong>Hello '.$name.', </strong></p><p style="font-size:16px; margin-bottom:5px;">Thanks to contact PascalCoin !!</p><p style="font-size:16px; margin-bottom:5px;">We will contact you soon.</p></td></tr><tr style="background-color: #f5f5f5;"><td style="padding:20px;"><p style="font-size:16px; margin:10px 0;">Thank you,</p><p style="font-size:16px; margin:10px 0;">Team PascalCoin</p></td></tr><tr align="center" style="background-color: #000000;color: #fff;"><td style="border-top:solid 1px #CCC"><p style="margin:20px 0 20px;font-size:16px;">Visit our website: www.pascalcoin.org</p></td></tr></table></td></tr></table>';

                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    $headers .= 'From: PascalCoin <'.ADMIN_MAIL.'>' . "\r\n";
                                    mail($email, $clt_subject, $clt_content, $headers, "-f ".ADMIN_MAIL);

                                    $adm_subject =     "PascalCoin: New Contact Message";
                                    
                                    $adm_content =     '<table border="0" cellpadding="0" cellspacing="0" width="600"  style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;width:600px; margin:20px auto;"><tr bgcolor="#000000"><td align="center" valign="top" width="100%"  style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><table border="0" cellpadding="10" cellspacing="0" width="100%" style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><tr align="center"><td><img src="'.BASE_URL.'img/logo-white.png" width="280" style="max-width:350px; margin-top: 30px; margin-bottom: 30px;" /></td></tr></table></td></tr><tr bgcolor="#f5f5f5"><td align="center" valign="top" width="100%" class="templateColumnContainer"><table border="0" cellpadding="10" cellspacing="0" width="100%" style="font-family: Tahoma, Geneva, sans-serif;font-size: 13px;"><tr><td class="templateColumnContainer" style="padding:0px 20px;"><p></p><p style="font-size:16px; margin-bottom:5px;"><strong>Hello PascalCoin, </strong></p><p style="font-size:16px; margin-bottom:5px;">New Contact Message For You!!</p><p style="font-size:16px; margin-bottom:5px;">Name: '.$name.'</p><p style="font-size:16px; margin-bottom:5px;">Email: '.$email.'</p><p style="font-size:16px; margin-bottom:5px;">Mobile No: '.$mob_no.'</p><p style="font-size:16px; margin-bottom:5px;">Message: '.$comment.'</p></td></tr><tr style="background-color: #f5f5f5;"><td style="padding:20px;"><p style="font-size:16px; margin:10px 0;">Thank you,</p><p style="font-size:16px; margin:10px 0;">Team PascalCoin</p></td></tr><tr align="center" style="background-color: #000000;color: #fff;"><td style="border-top:solid 1px #CCC"><p style="margin:20px 0 20px;font-size:16px;">Visit our website: www.pascalcoin.org</p></td></tr></table></td></tr></table>';

                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    $headers .= 'From: PascalCoin <'.ADMIN_MAIL.'>' . "\r\n";
                                    mail(ADMIN_MAIL, $adm_subject, $adm_content, $headers, "-f ".ADMIN_MAIL."");

                                    echo '<div style="text-align: center; color: green;">Your message sent successfully.</div>';
                                 }else{
                                    echo '<div style="text-align: center; color: red;">Please enter valid email.</div>';
                                 }  
                            }else{
                                echo '<div style="text-align: center; color: red;">Please enter required fields.</div>';
                            }
                        }
                ?>

                <div class="col-sm-12 contact">
                    <div class="row">
                        <div class="contact-feature">
                            <div class="col-sm-6 ">
                            <img src="img/logo.png" class="img-responsive">
                            <hr>
                            <p>Have any questions? Want to get involved with the PascalCoin Project? Please fill out the contact form, we’d love to hear from you.</p>
                             <hr>
                            </div>
                            <div class="col-sm-6 ">
                                 <form class="form-horizontal" method="post" id="contact_form">
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="name" placeholder="Name" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                  
                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="E-Mail" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="mob_no" placeholder="Mobile No" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="comment" placeholder="What are you looking for?"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <!-- <button type="submit" class="btn btn-warning pull-right">Submit <span class="glyphicon glyphicon-send"></span></button> -->
                                                <input name="contactus" type="submit" class="btn btn-warning pull-right" value="Submit">
                                            </div>
                                        </div>

                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
    
<?php include 'footer.php';?>
   
</body>

</html>
