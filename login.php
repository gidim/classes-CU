<?php
include('Model/DB.php');
include('Controller/session.php');
if ($user) {
//	$logoutUrl = $facebook->getLogoutUrl();
	header( 'Location: http://107.170.18.96/classes-cu/index.php' ) ;
}
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
?>

<!DOCTYPE html>
<html lang="en" style="height:100%;">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                        <meta name="author" content="">
                            <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
                                
                                <title>CUReview - Login</title>

                                <!-- Bootstrap core CSS -->
                                <link href="../css/bootstrap.min.css" rel="stylesheet">
                                    
                                    <!-- Custom styles for this template -->
                                    <link href="../css/cover.css" rel="stylesheet">
                                        
                                        <!-- Just for debugging purposes. Don't actually copy this line! -->
                                        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
                                        
                                        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                        <!--[if lt IE 9]>
                                         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                         <![endif]-->
                                        </head>
    
										<body style="height:100% vertical-align:center;">
										<!-- Facebook login root -->
											<div id="fb-root"></div>
											<script>(function(d, s, id) {
													 var js, fjs = d.getElementsByTagName(s)[0];
													 if (d.getElementById(id)) return;
													 js = d.createElement(s); js.id = id;
													 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=647770695269383";
													 fjs.parentNode.insertBefore(js, fjs);
													 }(document, 'script', 'facebook-jssdk'));</script>										
											<div class="container">											
												<div class="row">
													<div class="col-lg-12" style="height:150px;"></div>
												</div>
												<div class="row">
													<div class="col-lg-2"></div>
													<div class="col-lg-8">
														<div class="jumbotron">
															<div class="container-fluid">
																<div class="row">
																	<div class="col-lg-12">
																		<img src="../files/CUReviewLogo.png" style="width:50%; height:50%;">
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12" style="padding-top: 25px; padding-left:39px;">
																		<p>Genuine reviews that only students can access.<br>Sorry professor! </p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12" style="padding-top: 40px; padding-left:39px;">
																		<a style="display:block;" href="<?php echo $facebook->getLoginUrl(); ?>" fb-login-button" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false" scope="email"></a>
																	</div>
																</div>
															</div>																									
														</div>											
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
        
        <!-- Bootstrap core JavaScript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/docs.min.js"></script>
    </body>
</html>






---------GIDI
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h1>php-sdk</h1>

    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        Check the login status using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $statusUrl; ?>">Check the login status</a>
      </div>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>

    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>Your User Object (/me)</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

    <h3>Public profile of Naitik</h3>
    <img src="https://graph.facebook.com/naitik/picture">
    <?php echo $naitik['name']; ?>
  </body>
</html>