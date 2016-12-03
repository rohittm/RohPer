<?php
/* Front Page Template*/
    get_header();
 ?>
 <div id="about">
   <div class="container">
     <div class="section-title text-center center">
       <h2>About Me</h2>
       <hr>
     </div>
     <div class="row">
       <div class="col-md-12 text-center"><img src="<?php bloginfo('template_url') ?>/img/about.jpg" class="img-responsive"></div>
       <div class="col-md-8 col-md-offset-2">
         <div class="about-text">
           <p>I’m an Undergrad "Engineering" Student from DIT University, Dehradun pursuing Bachelors Degree in Computer Science & Engineering. </p>
           <p>I'm a Web Developer and Open Source Supporter. Apart from being geek, I love to read books, and watch movies & TV shows.</p>
           <p>I also work as a freelancer, so feel free to drop me a mail if you're interested in doing something cool (or to chat about Star Wars).
 </p>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Services Section -->
 <div id="service" class="text-center">
   <div class="container">
     <div class="section-title center">
       <h2>Services</h2>
       <hr>
     </div>
     <div class="row">
       <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
         <div class="service-box"> <span class="servicelogo"><i class="fa fa-html5"></i> <i class="fa fa-css3"></i></span>
           <h4>Web Design & Development</h4>
         </div>
       </div>
       <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
         <div class="service-box"> <span class="servicelogo"><i class="fa fa-line-chart"></i></span>
           <h4>SEO</h4>
         </div>
       </div>
 	<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
         <div class="service-box"> <span class="servicelogo"><i class="fa fa-wordpress"></i></span>
           <h4>WordPress Development</h4>
         </div>
       </div>
 	<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
         <div class="service-box"> <span class="servicelogo"><i class="fa fa-pencil-square-o"></i></span>
           <h4>Content Development</h4>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Section -->
 <div id="portfolio">
   <div class="container">
     <div class="section-title text-center center">
       <h2>Portfolio</h2>
       <hr>
     </div>
     <div class="categories">

       <div class="clearfix"></div>
     </div>
     <div class="row">
       <div class="portfolio-items">
         <div class="col-sm-6 col-md-3 col-lg-3 web">
           <div class="portfolio-item">
             <div class="hover-bg"> <a href="<?php bloginfo('template_url') ?>/img/800x533.png" title="The Collabration of Communities in DIT University, Dehradun" rel="prettyPhoto">
               <div class="hover-text">
                 <h4>TwiddleNut</h4>
                 <small>Web Design</small> </div>
               <img src="<?php bloginfo('template_url') ?>/img/400x400.png" class="img-responsive" alt="TwiddleNut"> </a> </div>
           </div>
         </div>
         <div class="col-sm-6 col-md-3 col-lg-3 graphics">
           <div class="portfolio-item">
             <div class="hover-bg"> <a href="<?php bloginfo('template_url') ?>/img/800x533.png" title="Project description" rel="prettyPhoto">
               <div class="hover-text">
                 <h4>The Force</h4>
                 <small>WordPress Plugin Development</small> </div>
               <img src="<?php bloginfo('template_url') ?>/img/400x400.png" class="img-responsive" alt="Project Title"> </a> </div>
           </div>
         </div>
         <div class="col-sm-6 col-md-3 col-lg-3 web">
           <div class="portfolio-item">
             <div class="hover-bg"> <a href="<?php bloginfo('template_url') ?>/img/800x533.png" title="Project description" rel="prettyPhoto">
               <div class="hover-text">
                 <h4>National Conference on Liquid Crystals 22</h4>
                 <small>Web Design</small> </div>
               <img src="<?php bloginfo('template_url') ?>/img/400x400.png" class="img-responsive" alt="Project Title"> </a> </div>
           </div>
         </div>
         <div class="col-sm-6 col-md-3 col-lg-3 web">
           <div class="portfolio-item">
             <div class="hover-bg"> <a href="<?php bloginfo('template_url') ?>/img/800x533.png" title="Project description" rel="prettyPhoto">
               <div class="hover-text">
                 <h4>India's Digital Footprint</h4>
                 <small>Community Campaign</small> </div>
               <img src="<?php bloginfo('template_url') ?>/img/400x400.png" class="img-responsive" alt="Project Title"> </a> </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Skills Section -->
 <div id="skills" class="text-center">
   <div class="container">
     <div class="section-title center">
       <h2>Skills</h2>
       <hr>
     </div>
     <div class="row">
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
         <h4>HTML5</h4>
       </div>
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
         <h4>CSS3</h4>
       </div>
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
         <h4>jQuery</h4>
       </div>
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="90"> <span class="percent">90</span> </span>
         <h4>WordPress</h4>
       </div>
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="90"> <span class="percent">90</span> </span>
         <h4>Photoshop</h4>
       </div>
       <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="35"> <span class="percent">35</span> </span>
         <h4>Illustrator</h4>
       </div>
     </div>
   </div>
 </div>
 <!-- Resume Section -->
 <div id="resume" class="text-center">
   <div class="container">
     <div class="section-title center">
       <h2>Experience</h2>
       <hr>
     </div>
     <div class="row">
       <div class="col-lg-12">
         <ul class="timeline">
           <li>
             <div class="timeline-image">
               <h4>Aug 2016<br>
                 - <br>
                 Present </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>JustFreeThemes.com</h4>
                 <h4 class="subheading">Content Developer</h4>
               </div>
               <div class="timeline-body">
                 <p>Reviewing Of Free and Popular WordPress Themes.</p>
               </div>
             </div>
           </li>
           <li class="timeline-inverted">
             <div class="timeline-image">
               <h4>May 2016<br>
                 - <br>
                 July 2016 </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>Scholars For Change, IIM Ahemedabad</h4>
                 <h4 class="subheading">Campaign Associate Intern</h4>
               </div>
               <div class="timeline-body">
                 <p>To develop Learning Projects involving an active exploration of real world problems for students of 6-8 based on MATHEMATICS and SCIENCE</p>
               </div>
             </div>
           </li>
           <li>
             <div class="timeline-image">
               <h4>Nov 2015 <br>
                 - <br>
                 Present </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>Microsoft</h4>
                 <h4 class="subheading">Student Partner, India</h4>
               </div>
               <div class="timeline-body">
                 <p>
 		Microsoft Student Partners (MSPs) are social and friendly students who represent Microsoft at their home campus, organize various events on campus. Join exclusive Microsoft training events to learn the latest technologies. Spread awareness about various latest applications and technologies. Get access to latest Microsoft technologies including MSDN Enterprise.
 		</p>

               </div>
             </div>
           </li>
         </ul>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="section-title center">
       <h2>Education</h2>
       <hr>
     </div>
     <div class="row">
       <div class="col-lg-12">
         <ul class="timeline">

           <!-- Education Section-->

           <li>
             <div class="timeline-image">
               <h4>2014 <br>
                 - <br>
                 Present </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>DIT University, Dehradun.</h4>
                 <h4 class="subheading">Bachelor of Technology (B.Tech) in Computer Science and Engineering (CSE)</h4>
               </div>
               <div class="timeline-body">
                 <p>CGPA : 6.9 (Till Date)</p>
               </div>
             </div>
           </li>
           <li class="timeline-inverted">
             <div class="timeline-image">
               <h4>2013 <br>
                 - <br>
                 2014 </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>The Chintels School, Kanpur.</h4>
                 <h4 class="subheading">Class 12th (ISC)</h4>
               </div>
               <div class="timeline-body">
                 <p> 86.25%</p>
               </div>
             </div>
           </li>
           <li>
             <div class="timeline-image">
               <h4>2011 <br>
                 - <br>
                 2012 </h4>
             </div>
             <div class="timeline-panel">
               <div class="timeline-heading">
                 <h4>The Chintels School, Kanpur.</h4>
                 <h4 class="subheading">Class 10th (ICSE)</h4>
               </div>
               <div class="timeline-body">
                 <p class="text-muted"> 83%</p>
               </div>
             </div>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <!-- Ribbon Section -->
 <div id="skills" class="text-center">
   <div class="container">
     <div class="section-title center">
       <h2 style="line-height: 35px;">Download My Resume Here</h2>
       <hr>
     </div>
     <a href="http://rohitmotwani.com/resume.pdf" class="btn btn-default btn-lg page-scroll"><i class="fa fa-download"></i> Download Resume</a> </div>
   </div>
 </div>
 <!-- Blog Section -->
 <section class="blogposts" id="blogposts">
 			<div class="container">
 				<div class="row">
 									<header data-sr="ease-in-out wait 0.25s" class="blog-header">
 											<h2>Blog</h2>
 									<div class="col-md-12">
 																																	<div data-sr="ease-in-out wait 0.25s" class="col-md-4 col-sm-12 col-xs-12 blog-item">
 							<div class="item">
 																	<a class="item-featured-image" href="blog.html"><img src="<?php bloginfo('template_url') ?>/img/423x339.png"/></a>
 																<div class="item-meta">
 									<h3 class="post-title"><a href="blog.html">First WordPress Kanpur Meetup</a></h3>
 									<h6 class="post-meta"><a href="#" title="Posts by Rohit" rel="author">Rohit</a> - November 1, 2016</h6>
 									<p>So, we had our first ever WordPress Meetup in Kanpur at My Apartment. Well, it was fun. There were few people who attended it but yes, it was the first meetup and I see much energy and potential in the community and I believe the Kanpur WordPress Community will grow eventually. &nbsp; Now let me [&hellip;]</p>
 								</div>
 							</div>
 						</div>
 												<div data-sr="ease-in-out wait 0.25s" class="col-md-4 col-sm-12 col-xs-12 blog-item">
 							<div class="item">
 																	<a class="item-featured-image" href="blog.html"><img src="<?php bloginfo('template_url') ?>/img/423x339.png"/></a>
 																<div class="item-meta">
 									<h3 class="post-title"><a href="blog.html">Update No. N+1</a></h3>
 									<h6 class="post-meta"><a href="#" title="Posts by Rohit" rel="author">Rohit</a> - September 10, 2016</h6>
 									<p>So, I&#8217;ve been competing in Codechef&#8217;s September 2016 programming challenge. Actually I have just started with the Competitive Coding. Good thing I solved 3 questions successfully (after 2-3 attempts :p ). Now I&#8217;m stucked with a problem from past four days. Rest of the problems are out of my league :p. Well this problem is DIVMAC and [&hellip;]</p>
 								</div>
 							</div>
 						</div>
 												<div data-sr="ease-in-out wait 0.25s" class="col-md-4 col-sm-12 col-xs-12 blog-item">
 							<div class="item">
 																	<a class="item-featured-image" href="blog.html"><img src="<?php bloginfo('template_url') ?>/img/423x339.png"/></a>
 																<div class="item-meta">
 									<h3 class="post-title"><a href="blog.html">Defeat Defeat</a></h3>
 									<h6 class="post-meta"><a href="#" title="Posts by Rohit" rel="author">Rohit</a> - April 7, 2016</h6>
 									<p>What is defeat? What does it mean to be defeated? Is it losing and failing? Defeat is that doubt in your head, the demon that feeds in your fear, it tells you you’re not good enough, that you can’t do it, that it’s not possible. Succumbing to that demon, that thought, that… is defeat. So [&hellip;]</p>
 								</div>
 							</div>
 						</div>
 																</div>
 				</div>
 			</div>
 		</section>
 <!-- Map Section -->
 <section class="map" id="map" style="padding: 0; height: 50%;">
 			<div class="map_overlay" onClick="style.pointerEvents='none'"></div>
 			<iframe class='map_frame' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0' 				src='https://maps.google.com/maps?&amp;q=Rohit%20Motwani,%20Kanpur&amp;output=embed&amp;iwloc' style="width: 100%; height: 100%;"></iframe>
 		</section>
 <!-- Contact Section -->
 <div id="contact" class="text-center">
   <div class="container">
     <div class="section-title center">
       <h2>Contact</h2>
       <hr>
     </div>
     <div class="col-md-8 col-md-offset-2">
       <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
         <p>Plot No. 94,<br>
           Ratanlal Nagar, Kanpur 208022</p>
       </div>
       <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
         <p>me [at] RohitMotwani [dot] com</p>
       </div>
       <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
         <p> +91 98 89 282828</p>
       </div>
       <div class="clearfix"></div>
     </div>
     <div class="col-md-8 col-md-offset-2">
       <h3>Leave me a message</h3>
       <form name="sentMessage" id="contactForm" novalidate>
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <input type="text" id="name" class="form-control" placeholder="Name" required="required">
               <p class="help-block text-danger"></p>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <input type="email" id="email" class="form-control" placeholder="Email" required="required">
               <p class="help-block text-danger"></p>
             </div>
           </div>
         </div>
         <div class="form-group">
           <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
           <p class="help-block text-danger"></p>
         </div>
         <div id="success"></div>
         <button type="submit" class="btn btn-default">Send Message</button>
       </form>
       <div class="social">
         <ul>
           <li><a href="http://www.facebook.com/rrohitt"><i class="fa fa-facebook"></i></a></li>
           <li><a href="http://www.twitter.com/rohittm"><i class="fa fa-twitter"></i></a></li>
           <li><a href="http://www.bitbucket.com/rohittmotwani"><i class="fa fa-bitbucket"></i></a></li>
           <li><a href="http://www.github.com/rohittm"><i class="fa fa-github"></i></a></li>
           <li><a href="http://www.instagram.com/rohittm"><i class="fa fa-instagram"></i></a></li>
           <li><a href="https://www.linkedin.com/in/rohittm"><i class="fa fa-linkedin"></i></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>

<?php get_footer(); ?>
