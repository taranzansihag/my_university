<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My university</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style type="text/css">
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     
      margin: auto;
  }
  #notifications,#comings,#students,#clgs{
	 display:none;
	 }
  </style>
<script src="university/jquery.js"></script>
  <script>
				function w3_open() {
					document.getElementById("mySidenav").style.height = "40%";
					document.getElementById("mySidenav").style.display = "block";
				}
				function w3_close() {
					document.getElementById("mySidenav").style.display = "none";
				}
				function change(v){
				  var s=v+"s";
				 document.getElementById("main").innerHTML=document.getElementById(s).innerHTML; 
				}	
				</script>
		
			
				
    </head>
	 <body class="w3-light-grey w3-content" style="max-width:1600px">

	<nav class="w3-downnav w3-blue" style="display:none" id="mySidenav">
		   <br>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">HOME</b><br>
						<a href="about.php">Research</a><br>
						<a href="gallery.php">Gallary</a><br>
						<a href="sport.php">Sports</a><br>
					</div>
					<div class="col-sm-1 w3-text-white">
						<b style="text-decoration:underline" align="center">ABOUT</b><br>
						<a href="about.php">Research</a><br>
						<a href="about.php">Mission</a><br>
						<a href="about.php">Objective</a><br>
						<a href="about.php">History</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Courses & Colleges</b><br>
						<a href="college.php">Colleges</a><br>
						<a href="branch.php">Branches</a><br>
						<a href="course.php">Courses</a><br>
						<a href="syllabus.php">Syllabus</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Examination</b><br>
						<a href="fees.php">Pay Fee Online</a><br>
						<a href="enrollment.php">Enrollment</a><br>
						<a href="time.php">Time Table</a><br>
						<a href="result.php">Result</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">Upcoming Activities</b><br>
						<a href="form.php">Conduct</a><br>
						<a href="form.php">Exam Form</a><br>
						<a href="form.php">Reevalution</a><br>
						<a href="form.php">Addmission Card</a><br>
					</div>
					<div class="col-sm-2 w3-text-white" align="center">
						<b style="text-decoration:underline">PLACEMENT</b><br>
						<a href="placement.php">placement record</a><br>
						<a href="company.php">companies</a><br>
						<a href="t&p.php">T&P</a><br>
						
					</div>
			
					<div class="col-sm-1" style="hieght:100px">
					
					<br><br>
				  <a href="#" onClick="w3_close()"><img src="university/images/delete.png" width="20px" class="img-responsive"></a>
					</div>
				</nav>
	
	
				
				
		<div class="container-fluid responsive">
		<div class="row" style="height:8px"></div>
		<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-4">
			<div class="col-sm-4">
				<img src="university/images/jatlogo.png" class="img-responsive" width="100px">
				</div>
				
				<h3><b class="w3-text-purple w3-text-shadow">My University</b></h3>
				<span class="w3-text-green">Higher Education for Dignity <br> and Self Relience</span>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<br>
				<div class="col-sm-3 w3-border-right">
				&nbsp;<i class="fa fa-photo w3-text-red" style="font-size:34px"></i>
				 <a href="gallery.php"> Gallery</a>
				</div>
				<div class="col-sm-3 w3-border-right">
				<i class="fa fa-phone w3-text-red" style="font-size:34px"></i>
			     <a href="contact.php"> Contact</a>
				</div>
				<div class="col-sm-3 w3-border-right">
				<li class="w3-dropdown-hover">
				<i class="fa fa-link w3-text-red" style="font-size:34px"></i>
				 <a>Link</a>
				 <div class="w3-dropdown-content w3-cyan w3-card-12">
				  <br>
				  <b><a href="gallery.php">Gallery</a></b>
				  <b><a href="result.php">Result</a></b>
				  <b><a href="fees.php">Pay fee</a></b>
				  <b><a href="syllabus.php">Syllabus</a></b>
				  <b><a href="time.php">Time Table</a></b>
				  <b><a href="problem.php">Help</a></b>
				  <br>
				</div>
				</li>
			
				</div>
				<div class="col-sm=3">
				 &nbsp;
				  <i class="fa fa-align-justify w3-text-red" onClick="w3_open()" style="font-size:34px"></i>
				  <span> &nbsp &nbsp;MENU</span>
				  
				</div>
				
		</div>	
			
			
		</div>
		
		
		<div class="row" style="height:8px"></div>
		<div class="row" style="height:8px">
		<img src="university/images/line2.png" class="img-responsive" width="100%">
		
		</div>
			 <div class="row">
     <div class="w3-card-12 w3-animate-zoom">
       
              <div id="my" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                     <li data-target="#my" data-slide-to="0" class="active"></li>
                     <li data-target="#my" data-slide-to="1"></li>
                     <li data-target="#my" data-slide-to="2"></li>
                    <li data-target="#my" data-slide-to="3"></li>
                     <li data-target="#my" data-slide-to="4"></li>
                     <li data-target="#my" data-slide-to="5"></li>
                  </ul>
                <div class="carousel-inner" role="list-box">
                    <div class="item active">
                        <img src="university/images/u1.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="university/images/u2.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="university/images/u3.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="university/images/u4.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="university/images/u5.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="university/images/u6.jpg" class="img-responsive">
                    </div>
                   
                </div>
                   
             
            </div>
	    </div>
            </div>  
		<br>
		
		
		<div class="row">
		<marquee onMouseOver="stop()" onMouseOut="start()" class="w3-text-red w3-border-right">
		  <b class="w3-text-green w3-text-shadow">My University</b>
		<?php
			include("database.php");
			$rs=mysql_query("select * from news");
			while($r=mysql_fetch_array($rs)){
				if($r[2]!='college'){
				?>
				<a href="university/news/<?=$r[1]?>.pdf"><b> | <?=$r[1]?> <img src="university/images/new3.gif"></b></a>
				<?php
			}
			}
		?>
		</marquee>
		</div>
		
   </div>
<br><br><br>
		<div class="container responsive">
		
		<div class="col-sm-8">
		
		<div class="row w3-animate-zoom">
				<h2 class="w3-text-red w3-text-shadow w3-border-bottom w3-border-red" align="center">Vice Chancellor Message</h2>
			<span class="w3-text-black">
			The establishment of the My University, Bikaner at Bikaner marks an important<br>
			milestone in the development of Higher Education in Rajasthan. The University <br>
			envisages to develop its campus in terms of academic input and infrastructural <br>
			facilities as a nucleus and resource centre for development of its affiliated <br>
			colleges as well as to develop its campus teaching through various teaching departments.<br>
			The University has the faculties of Arts,Social Sciences, Science, Commerce, Education and <br>
			Law. Presently, there are five university teaching departments in the subjects of English,<br>
     		History, Environmental Science, Microbiology and Computer Science.<br> 
			</span>
			<br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
			<a href="vch.php" class="w3-text-red">read more..........</a>
			</div>
			<br><br><br><br>
			
			<div claass="row">
				<div class="row w3-border-bottom w3-border-purple">
				
				<div class="col-sm-3" align="center">			
				 <button class="w3-btn w3-light-grey" id="notification"  onClick="change('notification')"><b>NOTIFICATION</b></button>
				</div>
				
				<div class="col-sm-3" align="center">				
				 <button class="w3-btn w3-light-grey" id="coming"  onClick="change('coming')"><b>UPCOMING EVENT</b></button>
				</div>
				
				<div class="col-sm-3" align="center">
                 <button class="w3-btn w3-light-grey" id="student"  onClick="change('student')"><b>STUDENT UPDATE</b></button>
			    </div>
			   
			   <div class="col-sm-3" align="center">
                 <button class="w3-btn w3-light-grey" id="clg"  onClick="change('clg')"><b>COLLEGES</b></button></li>
			   </div>
			
			</div>
			</div>
			<br>
		<div id="main">
	     <?php
		 $sn=0;
		include("database.php");
		$rs = mysql_query("select * from news where ntype='notification' ");
		while($r=mysql_fetch_array($rs)){
			$sn=$sn+1;
			?>
				<div class="col-sm-6">
					<a href="university/news/<?=$r[1]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></h4></a>
				</div>
			<?php
		}
	   ?>
	 </div>	
	 <div id="notifications">
	   <?php
	   $sn=0;
		include("database.php");
		$rs = mysql_query("select * from news where ntype='notification' ");
		while($r=mysql_fetch_array($rs)){
			$sn=$sn+1;
			?>
				<div class="col-sm-6">
					<a href="university/news/<?=$r[1]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></h4></a>
				</div>
			<?php
		}
	   ?>
	 </div>	
	 <div id="comings">
	    <?php
		$sn=0;
		include("database.php");
		$rs = mysql_query("select * from news where ntype='event' ");
		while($r=mysql_fetch_array($rs)){
			$sn=$sn+1;
			?>
				<div class="col-sm-6">
					<a href="university/news/<?=$r[1]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></h4></a>
				</div>
			<?php
		}
	   ?>
	 </div>	
	 <div id="students">
	     <?php
		$sn=0;
		include("database.php");
		$rs = mysql_query("select * from news where ntype='student' ");
		while($r=mysql_fetch_array($rs)){
			$sn=$sn+1;
			?>
				<div class="col-sm-6">
					<a href="university/news/<?=$r[1]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></h4></a>
				</div>
			<?php
		}
	   ?>
	</div>	
<div id="clgs">
	    <?php
		$sn=0;
		include("database.php");
		$rs = mysql_query("select * from news where ntype='college' ");
		while($r=mysql_fetch_array($rs)){
			$sn=$sn+1;
			?>
				<div class="col-sm-6">
					<a href="university/news/<?=$r[1]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></h4></a>
				</div>
			<?php
		}
	   ?>
	</div>
		
		</div>
		
		
		
		
		
		
		<div class="col-sm-4">
		<br><br>
			<div class="w3-card-12 w3-animate-zoom">
			 <div class="panel panel-body w3-red">
			 <div class="row">
				<div class="col-sm-4"><br>
					<img src="university/images/profile.jpg" class="img-circle img-responsive"><br>
				</div>
				<div class="col-sm-8">
					<h4><b class="w3-text-white w3-text-shadow" align="center" style="text-decoration:underline">Chancellor</b></h4>
					<span>Teja Ram Choudhary</span><br>
					<span>Goverment Of Rajasthan</span><br>
					
				</div>
				</div>
					<img src="university/images/line3.png" class="img-responsive">
					
			 </div>
			</div>
			<div class="w3-card-12 w3-animate-zoom">
			 <div class="panel panel-body w3-red">
			 <div class="row">
				<div class="col-sm-4"><br>
					<img src="university/images/p5.jpg" class="img-circle img-responsive"><br>
				</div>
				<div class="col-sm-8">
					<h4><b class="w3-text-white w3-text-shadow" align="center" style="text-decoration:underline">Vice Chancellor</b></h4>
					<span>Prof Rohit Siyag</span><br><br>
					
				</div>
				</div>
					<img src="university/images/line3.png" class="img-responsive">
					
			 </div>
			</div>
			
			<div class="panel panel-body w3-animate-zoom">
			<br>
			<div align="center">
				<h3><b class="w3-text-red w3-text-shadow">EXAMINATION</b></h3><br>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-11">
				<div class="w3-border-bottom w3-border-gray">
					<b class="fa fa-circle w3-text-red"></b><b class="w3-text-black"><a href="fees.php"> &nbsp; Pay Fee</a></b><br><br>
				</div>
				
				<div class="w3-border-bottom w3-border-gray">
					<br><b class="fa fa-circle w3-text-red"></b><b class="w3-text-black"><a href="time.php"> &nbsp; Time Table</a></b><br><br>
				</div>
				<div class="w3-border-bottom w3-border-gray">
					<br><b class="fa fa-circle w3-text-red"></b><b class="w3-text-black"><a href="enrollment.php"> &nbsp; Enrollment</a></b><br><br>
				</div>
				<div class="w3-border-bottom w3-border-gray">
					<br><b class="fa fa-circle w3-text-red"></b><b class="w3-text-black"><a href="result.php"> &nbsp; Result</a></b><br><br>
				</div>
				</div>
			</div>
			
		</div>
		
		
		
		
		
		
		<div class="row">
			<h2 class="w3-text-red w3-text-shadow w3-border-bottom w3-border-red animated shake"><b>Department</b></h2>
		</div>
		<div class="row">
		
			<div class="col-sm-3">
				<img src="university/images/l3.jpg" class="mySlides w3-animate-fading img-responsive"><br>
				<span>Computer Department</span>
			</div>
			<div class="col-sm-3">
				<img src="university/images/academic.jpg" class="mySlides w3-animate-fading img-responsive"><br>
				<span>Academic Department</span>
			</div>
			<div class="col-sm-3">
				<a href="library.php"><img src="university/images/l5.jpg" class="mySlides w3-animate-fading img-responsive"><br>
				<span>Library Department</span></a>
			</div>
			<div class="col-sm-3">
				<a href="rangging.pdf"><img src="university/images/rangging.jpg" class="mySlides w3-animate-fading img-responsive"><br>
				<span>Anti Rangging Department</span></a>
			</div>
		
		</div>
	</div>
   <br>
   
   
				<div class="row" style="background-image:url(university/images/u51.jpg)" >
			<br><br>
			<div class="col-sm-3" align="center">
				<a href="fees.php"><img src="university/images/admission.png" width="120px" class="img-responsive"><br>
				<b class="w3-text-shadow w3-text-white">Addmission</b><br>
				<span class="w3-text-white">form,fee structure</span></a>
				<br><br><br>
			</div>
			<div class="col-sm-3" align="center">
				<a href="result.php"><img src="university/images/exam.png" width="120px" class="img-responsive"><br>
				<b class="w3-text-shadow w3-text-white">Examination</b><br>
				<span class="w3-text-white">Exam form,Timetable,result</span></a>
			</div>
			<div class="col-sm-3" align="center">
				<a href="syllabus.php"><img src="university/images/syllabus.png" width="120px" class="img-responsive"><br>
				<b class="w3-text-shadow w3-text-white">Syllabus</b><br></a>
				<span class="w3-text-white">Cource Detail,subject detail</span>
			</div>
			<div class="col-sm-3" align="center">
				<a href="problem.php"><img src="university/images/help.png" width="120px" class="img-responsive"><br>
				<b class="w3-text-shadow w3-text-white">Helpdesk</b><br>
				<span class="w3-text-white">contact all department employee</span></a>
			</div>
		</div>
		
		

					<div class="row">
			<div class="panel panel-body">
			<br><br><br>
				<div class="col-sm-6">
					<div class="col-sm-5">
					<br>
						<img src="university/images/g4.jpg" class="img-responsive">
					</div>
					<div class="col-sm-7">
						
						<h2 align="center" class="w3-text-red w3-text-shadow">Visit Campus</h2>
				  <span class="w3-text-green">My University, Bikaner has been
						established by the University of Bikaner Act, 2010
					   (Act No. 13 of 2010), the Rajasthan Gazette Extraordinary
					   Part-4(Ka), published on June, 07, 2010 as a new State University.<br>
					   </span>
					   <br>
					   <a href="#">more detail...</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-sm-5">
					<br>
						<img src="university/images/c1.jpg" class="img-responsive">
					</div>
					<div class="col-sm-7">
						
						<h2 align="center" class="w3-text-red w3-text-shadow">Community</h2>
				  <span class="w3-text-green">Community college used to have a
				  reputation of being less academically serious than traditional
				  four-year universities. But a lot has changed in the world of community college.<br>
					   </span>
					   <br>
					   <a href="#">more detail...</a>
					</div>
				</div>
				<br>
			</div>
		</div>

			
				<div class="row">
								<div class="container">
							<div class="row">
								<h2 class="w3-text-red w3-text-shadow w3-border-bottom w3-border-red animated shake"><b><a href="gallery.php"> Photo Gallery</a><br><br></b></h2>
							</div>	
													
					  <br>
					  
					  
					  
					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
	   <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="col-sm-3 item active">
        <img src="university/images/gl1.jpg" class="img-responsive">
      </div>

      <div class=" col-sm-3 item active">
	  <img src="university/images/gl2.jpg" class="img-responsive">
      </div>
    
      <div class="col-sm-3 item active">
	  <img src="university/images/gl3.jpg" class="img-responsive">
      </div>

      <div class="col-sm-3 item active">
	  <img src="university/images/gl4.jpg" class="img-responsive">
      </div>
	  
	   <div class="col-sm-3 item">
        <img src="university/images/gl1.jpg" class="img-responsive">
      </div>

      <div class=" col-sm-3 item">
	  <img src="university/images/gl2.jpg" class="img-responsive">
      </div>
    
      <div class="col-sm-3 item">
	  <img src="university/images/gl3.jpg" class="img-responsive">
      </div>

      <div class="col-sm-3 item">
	  <img src="university/images/gl4.jpg" class="img-responsive">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
					  
					  
					  
					  <br>
					  <a href="gallery.php" class="w3-text-red">  more image....</a> <br>
					</div>

				
				
					</div>
			   
			   
			   
			   
			   
			   <br><br>
		<div class="row w3-teal" style="height:300px">
		<div class="col-sm-4 w3-text-white w3-border-right w3-border-white" align="center">
			<h3><b class="w3-text-shadow">All Department</b></h3>
			<?php
				include("database.php");
				$rs=mysql_query("select * from department");
				while($r=mysql_fetch_array($rs)){
					?>
					<br><b><?=$r[1]?> section</b><br>
					<?php
				}
			?>
			</div>
			<div class="col-sm-4 w3-text-white w3-border-right w3-border-white" align="center">
			<br>
				<img src="university/images/jatlogo.png" class="img-responsive" width="130px"><br>
				<b>My University <br>
				  Bikaner Rajasthan</b><br>
				  <b>contact no.9636631400</b>
				  <br><br>
			</div>
			
			<div class="col-sm-4 w3-text-white" align="center">
			<br><br><br>
			<h3 class="w3-text-shadow"><b class="fa fa-envelope"></b><b> Student Wel-Fare Center</b></h3><br><br>
				<b><a href="problem.php">Student problem</a></b><br><br>
				<b><a href="problem.php">view your responce</a></b>
			</div>
			
			
		</div>
			   
			<div class="row w3-black" align="center" >
			<div class="row" style="height:10px"></div>
						<a href="myresume.php"><b class="w3-text-shadow w3-text-white"><i>copy right by: @ Teja Ram Choudhary</i></b></a>
					<div class="row" style="height:10px"></div>
				</div>
			   
			   
			   
</body>
</html>	