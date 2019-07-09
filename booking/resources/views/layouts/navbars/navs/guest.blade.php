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
	</div>
</div>

