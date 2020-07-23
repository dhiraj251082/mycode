

        <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	  
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/bootstrap-multiselect.css" />
		<!--<script src="assets/js/jquery-1.11.1.min.js"></script>-->
	
		<script src="assets/js/bootbox.min.js"></script>
	
	  <script src="assets/js/bootstrap-multiselect.js"></script> 

	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
			.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
		
        <link rel="shortcut icon" href="assets/ico/favicon.png">
		<link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
		<link rel="stylesheet" href="/assets/css/style.css">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">



    

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                   
                    <div class="row">
                        <div class="col-sm-6">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">NONCE_FIELD_PH
				                    <form role="form" action="" method="post" class="login-form" id="login-form" >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="login-form-username">Username</label>
				                        	<input type="text" name="login-form-username" placeholder="Username..." class="login-form-username form-control" id="login-form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="login-form-password">Password</label>
				                        	<input type="password" name="login-form-password" placeholder="Password..." class="login-form-password form-control" id="login-form-password">
				                        </div>
										<button type="submit" class="btn">Sign in!</button>
										<div class="login-status" id="login-status"></div>
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        
                        	
                        <div class="col-sm-6">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="register_form"  id ="register_form" >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="register-form-name">First name</label>
				                        	<input type="text" name="register-form-name" placeholder="Enter Full name..." class="register-form-name form-control" id="register-form-name"  pattern="[A-Z.a-z]{1,15}" title="Username should only contain letters. e.g. John" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="register-form-username">user Name</label>
				                        	<input type="text" name="register-form-username" placeholder="Enter Unique UerName..." class="register-form-username form-control" id="register-form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="register-form-email">Email</label>
				                        	<input type="email" name="register-form-email" placeholder="Email..." class="register-form-email form-control" id="register-form-email" value="@gmail.com" required>
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="register-company-name">Company Name</label>
				                        	<input type="text" name="register-company-name" placeholder="Company Name..." class="register-company-name form-control" id="register-company-name" value="mycompany" required>
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="register-website">Website</label>
				                        	<input type="text" name="register-website" placeholder="Website..." class="register-website form-control" id="register-website" value="ww.myinfo.com">
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="register-form-password">Email</label>
				                        	<input type="password" name="register-form-password" placeholder="Password..." class="register-form-password form-control" id="register-form-password" value="pass@123"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="register-form-repassword">Email</label>
				                        	<input type="password" name="register-form-repassword" placeholder="Re Enter Passwword..." class="register-form-repassword form-control" id="register-form-repassword" value="Pass@123" >
										</div>
										<div class="form-group">
										<select id="catagory2" name="catagory2"  class="catagory2 form-control" id="catagory2 form-control">
                                      
             
                                     </select>
										</div>
										<div class="form-group">
										<select id="industry" name="industry"  multiple class="industry form-control" id="industry form-control">
                                       <option value="">Select Industry</option>
             
                                     </select>
										</div>
				                        
										<button type="submit" class="btn">Sign me up!</button>
										<div class="register-status" id ="register-status"></div>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

       

        <!-- Javascript -->
       
    <!-- <script src="assets/js/scripts.js"></script> -->
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

  