<div class="container">
	<div class="header">
		<div class="head-t">
			<div class="logo">
				<a href="index.html"><img src="{{ asset('gretong') }}/images/itlogo.png" class="img-responsive" alt=""/> </a>
			</div>
			<!-- start header_right -->
			<div class="header_right">
				<div class="rgt-bottom">
					<div class="log">
						<div class="login" >
							<div id="loginContainer"><a href="{{ route('login') }}" id="loginButton"><span>Login</span></a>
								<div id="loginBox">                
									<form id="loginForm">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
														<label for="password">Password</label>
														<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
										<span><a href="{{ route('password.request') }}">Forgot your password?</a></span>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="reg">
						<a href="{{ route('register') }}">REGISTER</a>
					</div>
				<div class="cart box_1">
					<a href="checkout.html">
						<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="{{ asset('gretong') }}/images/bag.png" alt=""></h3>
					</a>	
					<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
					<div class="clearfix"> </div>
				</div>
				<div class="create_btn">
					<a href="checkout.html">CHECKOUT</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a></li>
			<li><a class="color4" href="#">TUXEDO</a></li>
			<li><a class="color5" href="#">SWEATER</a></li>
			<li><a class="color6" href="#">SHOES</a></li>			
			<li><a class="color7" href="#">GLASSES</a></li>
			<li><a class="color8" href="#">T-SHIRT</a></li>
			<li><a class="color9" href="#">WATCHES</a></li>
		 </ul> 
	</div>
</div>
<div class="arriv">
	<div class="container">
		<div class="arriv-top">	
			<div class="col-md-6 arriv-left">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/Microsoft-Certification-Logo.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-6 arriv-right">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/htmljscss.png" class="img-responsive" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/oracle.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-right1">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/linux.png" class="img-responsive" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/fortinet-inner.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-middle">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/java.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-right2">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/cisco.png" class="img-responsive" alt=""></a>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
