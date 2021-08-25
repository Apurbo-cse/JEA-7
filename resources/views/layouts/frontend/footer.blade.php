<div class="footer_agile_inner_info_w3l">
			@foreach($contacts as $contact)
				<div class="col-md-4 footer-left" style="margin-bottom:-20px;">
					<h2><a href="index.html"><span>J</span>EA</a></h2>
					<p style="text-align: justify;text-justify: inter-word;">{{$contact->description}}</p>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social two" >
					<li><a target="_blank" href="{{$contact->facebook}}" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							</a></li>
						<li><a target="_blank" href="{{$contact->twitter}}" class="twitter">
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							</a></li>
						<li><a target="_blank" href="{{$contact->instagram}}" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							</a></li>
						<li><a target="_blank" href="{{$contact->linkedin}}" class="linkedin">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							</a></li>
                            <li><a target="_blank" href="mailto:{{$contact->email}}" class="email">
								<div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
							</a></li>
                            <li><a target="_blank" href="tell:+88{{$contact->phone}}" class="cell">
								<div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
							</a></li>
					</ul>
				</div>
				<div class="col-md-8 footer-right">
					<div class="sign-grds">
						<div class="col-md-5 sign-gd">
							<h4>Our <span>Information</span> </h4>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="mens.html">Info</a></li>
								<li><a href="womens.html">Gallery</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="typography.html">Blog</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>

						<div class="col-md-6 sign-gd-two">
							<h4>Store <span>Information</span></h4>
							<div class="w3-address">
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Phone Number</h6>
										<p style="text-align: justify;text-justify: inter-word;">Call : <a href="tel:+88{{$contact->phone}}">{{$contact->phone}}</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Email Address</h6>
										<p style="text-align: justify;text-justify: inter-word;">Email : <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Location</h6>
										<p style="text-align: justify;text-justify: inter-word;">{{$contact->location}}</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

				<p class="copy-right">&copy 2021 JEA. All rights reserved | Design by <a
						href="http://apurboroy.me/"><b style="color:orange;  " class="ml12">Apurbo Roy</b></a></p>
			@endforeach
			</div>
		

	
		<!-- //login -->
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
			</span></a>

			
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
            
            <style>
                    .ml12 {
                    font-weight: 50;
                    font-size: 10px;
                    text-transform: uppercase;
                    letter-spacing: 0.5em;
                    margin-left:3px;
                }


            </style>

            <script>
                // Wrap every letter in a span
                var textWrapper = document.querySelector('.ml12');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({loop: true})
                .add({
                    targets: '.ml12 .letter',
                    translateX: [40,0],
                    translateZ: 0,
                    opacity: [0,1],
                    easing: "easeOutExpo",
                    duration: 1200,
                    delay: (el, i) => 500 + 30 * i
                }).add({
                    targets: '.ml12 .letter',
                    translateX: [0,-30],
                    opacity: [1,0],
                    easing: "easeInExpo",
                    duration: 1100,
                    delay: (el, i) => 100 + 30 * i
                });
            
            </script>
