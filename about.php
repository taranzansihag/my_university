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
  #historys,#missions,#objectives,#researchs{
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
		<div class="w3-round-jumbo w3-teal w3-padding w3-margin-bottom" align="center">
		<b class="w3-text-shadow">ABOUT</b></div>
	</div>
	<img src="university/images/aboutm.jpg" class="img-responsive" width="100%" height="10%"><br>
	
		<br><br>
		
		<div class="row">
		<div class="col-sm-3" align="center">
		
				<div class="row w3-border-bottom w3-border-purple">
				<br> <button class="w3-btn w3-light-grey" id="history"  onClick="change('history')"><b>HISTORY <i class=" fa fa-arrow-right"></i></b></button><br><br>
				</div>
				
				<div class="row w3-border-bottom w3-border-purple">			
				 <br><button class="w3-btn w3-light-grey" id="mission"  onClick="change('mission')"><b>MISSION <i class=" fa fa-arrow-right"></i></b></button><br><br>
				</div>
				
				<div class="row w3-border-bottom w3-border-purple">
                <br> <button class="w3-btn w3-light-grey" id="objective"  onClick="change('objective')"><b>OBJECTIVE <i class=" fa fa-arrow-right"></i></b></button><br><br>
			    </div>
			   
			  <div class="row w3-border-bottom w3-border-purple">
                 <br><button class="w3-btn w3-light-grey" id="research"  onClick="change('research')"><b>RESEARCH <i class=" fa fa-arrow-right"></i></b></button><br><br>
			   </div>
			<br><br><br>
			
			</div>
			
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
			
		            <div id="main">
					
					<div class="row w3-border-bottom w3-border-red">
					
						<h2 class="w3-text-red w3-text-shadow">History</h2>
						</div>
					   <br>
					   <b><p>
					   
						विश्वविद्यालय का निगमन –
						कुलाधिपति, प्रथम कुलपति, विश्वविद्यालय के प्रबंध बोर्ड और विद्या परिषद् के प्रथम सदस्य और ऐसे सभी व्यक्ति, जो इसके पाश्चात् ऐसे अधिकारी या सदस्य हो जाते हैं, 
						जब तक वे ऐसा पद या सदस्यता धारण किये रहते हैं, बीकानेर विश्वविद्यालय के नाम से एक निगमित निकाय का गठन करेंगे और उसका शाश्वत उत्तराधिकार और
						एक सामान्य मुद्रा होगी और उस नामे से वह वाद ला सकेगा और उस पर वाद लाया जा सकेगा।</p><br>
						<p>
						विश्वविद्यालय, विश्वविद्यालय के प्रयोजनों के लिए जंगम और स्थावर दोनों प्रकार कि संपत्ति अर्जित और धारित करने, ऐसी किसी भी जंगम या स्थावर संपत्ति को, 
						जो निहित हो या उसके द्वारा अर्जित कि जाये, पट्टाकृत, विक्रित या अन्यथा अंतरित या व्ययनित करने और संविदा करने और इस अधिनियम के प्रयोजनों के लिए 
						आवश्यक अन्य समस्त बातें करने के लिए सक्षम होगा !</p><br>
						<p>
						परन्तु ऐसी संपत्ति का ऐसा कोई भी पट्टा विक्रय या अंतरण राज्य सरकार के पूर्व अनुमोदन के बिना नहीं किया जायेगा।</p><br>
						<p>
						मुख्यालय
						विश्वविद्यालय का मुख्यालय बीकानेर में होगा जो कुलपति का मुख्यालय होगा।</p><br>
						<p>
						अधिकारिता
						(1) तत्समय प्रवृत किसी भी विधि में अंतर्विष्ट किसी बात के होने पर भी किन्तु राजस्थान विश्वविद्यालय अधिनियमए १९४६ राजस्थान कृषि विश्वविद्यालय बीकानेर अधिनियम, 
						१९८७ (१९८७ का अधिनियम सं. ३९), राजस्थान संस्कृत विश्वविद्यालय अधिनियम, १९९८ (१९९८ का अधिनियम सं. १०), महाराणा प्रताप कृषि और प्रोद्योगिकी विश्वविद्यालय 
						उदयपुर अधिनियम, २००० (२००० का अधिनियम संण् ८) और राजस्थान आयुर्वेद विश्वविद्यालय अधिनियम, २००२ (२००२ का अधिनियम सं. १५) के उपबंधों के अध्यधीन 
						रहते हुएए विश्वविद्यालय कि अधिकारिता का प्रसार, राजस्थान भू.राजस्व अधिनियम, १९५६ (१९५६ का अधिनियम संण् १५) के उपबंधों के अधीन राज्य सरकार द्वारा यथा.अधिसूचित
						, राजस्थान राज्य के बीकानेर खंड के भीतर के समस्त घटक, संबद्ध या स्वायत्त महाविद्यालयों संस्थानों, संस्थानों और विभागों में और राजस्थान राज्य के भीतर के ऐसे अन्य घटक, 
						संबद्ध या स्वायत्त महाविद्यालयों, संस्थानों, संस्थाओं और विभागों में भी होगा जो राज्य सरकार द्वारा, राजपत्र में अधिसूचना द्वाराए विनिर्दिष्ट किये जायें।</p><br>
						<p>
						िश्वविद्यालय के उद्देश्य
						विश्वविद्यालय अन्य प्रयोजनों के साथ-साथ, निम्लिखित प्रयोजनों के लिए स्थापित और निगमित किया हुआ समझा जायेगा –
						विद्या की विभिन्न शाखाओं में शिक्षा देने के लिए उपबन्ध करनाय और
						विद्या की समस्त शाखाओं में अनुसन्धान को अग्रसर करना।</p><br>
						</p></b>
					<div class="col-sm-6">
					   <img src="university/images/history.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 <div class="col-sm-6">
					   <img src="university/images/history1.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
						 
					 </div>	
					 
					 <div id="researchs">
					 <div class="row w3-border-bottom w3-border-red">
					
						<h2 class="w3-text-red w3-text-shadow">Research</h2>
						</div><br>
						<b><p>
					  Office of the Director – Research of the university is responsible for
					  all matters related to the research programmes leading to Ph.D. Degree,
					  Ph.D. The section also conducts entrance examination for admission to M.
					  Phil. and Ph.D. courses. It also deals with the whole research procedure
					  including coursework, registration, monitoring, evaluation and award of

					  Ph.D. degrees at the level of university departments, affiliated colleges
					  and recognized institutions with the university. In addition, the academic
					  research programmes are also carried out.</p><br>
					<p>
						The Ph.D. programme is governed by the University Ordinance 124
						(Ph.D. UGC Regulations, 2009) and statutory bodies of the University.</p><br>
						<p>

						The University Departments of Maharaja Ganga Singh University, Bikaner
						and a number of affiliated colleges which are located in the districts of Bikaner,
						Churu, Sriganganagar and Hanumangarh are approved for carrying out research work 
						leading to Ph.D. degree of Maharaja Ganga Singh University, Bikaner.</p><br>
						<p>

						PH.D./M.PHIL. RULES AND REGULATIONS
						</p></b><br>
						<div class="col-sm-6">
					   <img src="university/images/research.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 <div class="col-sm-6">
					   <img src="university/images/research1.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 </div>
					 
					 <div id="missions">
					   
					   <div class="row w3-border-bottom w3-border-red">
					
						<h2 class="w3-text-red w3-text-shadow">Mission</h2>
						</div>
						<br>
						<b><p>To build responsive, responsible, sensitive, creative and thoughtful citizens with
						a comprehensive understanding of regional, national and international perspectives.</p><br>
							<p>To strive towards the educational, cultural, economic, environmental and social advancement
							of the region and the nation at large by providing excellent liberal education and quality 
							programmes leading to bachelors, masters, professional and doctorate degrees.</p></b>

					
					  <br><br><br><br> <b class="w3-text-blue">Contact Us<br>
						Prof. S. K. Agarwal<br>
						Director – Mission<br></b>
						<i>Mission Section, Administrative Block<br>
						My University<br>
						, Bikaner – 334004<br>
						Rajasthan (India)<br><br>

						Fax: 0151-2212042<br>
						E-mail: directormission@myubikaner.ac.in</i>
						<br><br><br>
					   <div class="col-sm-6">
					   <img src="university/images/mission.png" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 <div class="col-sm-6">
					   <img src="university/images/mission1.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 </div>	
					 
					 <div id="objectives">
					   
					   <div class="row w3-border-bottom w3-border-red">
					
						<h2 class="w3-text-red w3-text-shadow">Objective</h2>
						</div>
					   <br>
					   <b><p>
					   
					   Goals</p><br>
					<p>
						To facilitate affordable quality education that enables the students acquire professional skills, adopt moral principles and develop a global perspective.<br>
						To work with commitment towards strengthening the four-fold fundamentals of higher education 
						– teaching, research, extension and consultancy by initiating programmes which integrate 
						both national and international perspectives.<br>
						To develop the University on the principle of Inclusive Education.<br>
						To work on the framework of high quality governance based on efficiency, transparency and 
						accountability.<br>
						To strive to achieve the status of a leading research intensive University
						addressing the issues related to the Thar region and folk culture.<br>
						To develop an affirmative mindset competent enough to thrive in the world 
						of competition by judiciously balancing the careerist and the career oriented education.<br>
						</p><br>
						<p>
						Objectives</p><br>
						<p>

						The University aims to achieve the goals by<br><br>

						Providing a wide range of learning opportunities at Undergraduate,
						Postgraduate and doctorate levels.<br>
						Undertaking research and consultancy on the challenges of the region 
						including its rich historicity and folk culture, which add to the expertise of the community.<br>
						Realizing a special obligation to educate the students belonging to minorities 
						and lower socio-economic strata of the society.<br>
						Building character values by initiating programmes aiming at 
						developing the individual & collective responsibility.<br>
						Encouraging faculty-student participatory interaction on matters
						of local, regional, national and international significance.
						Facilitating programmes aiming at capacity building for leadership and social service.<br>
					   
					   </p></b>
					    <div class="col-sm-6">
					   <img src="university/images/objective.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 <div class="col-sm-6">
					   <img src="university/images/objective1.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					   
					</div>	
					
				   <div id="historys">
					   
					   <div class="row w3-border-bottom w3-border-red">
					
						<h2 class="w3-text-red w3-text-shadow">History</h2>
						</div>
					   <br>
					   <b><p>
					   
						विश्वविद्यालय का निगमन –
						कुलाधिपति, प्रथम कुलपति, विश्वविद्यालय के प्रबंध बोर्ड और विद्या परिषद् के प्रथम सदस्य और ऐसे सभी व्यक्ति, जो इसके पाश्चात् ऐसे अधिकारी या सदस्य हो जाते हैं, 
						जब तक वे ऐसा पद या सदस्यता धारण किये रहते हैं, बीकानेर विश्वविद्यालय के नाम से एक निगमित निकाय का गठन करेंगे और उसका शाश्वत उत्तराधिकार और
						एक सामान्य मुद्रा होगी और उस नामे से वह वाद ला सकेगा और उस पर वाद लाया जा सकेगा।</p><br>
						<p>
						विश्वविद्यालय, विश्वविद्यालय के प्रयोजनों के लिए जंगम और स्थावर दोनों प्रकार कि संपत्ति अर्जित और धारित करने, ऐसी किसी भी जंगम या स्थावर संपत्ति को, 
						जो निहित हो या उसके द्वारा अर्जित कि जाये, पट्टाकृत, विक्रित या अन्यथा अंतरित या व्ययनित करने और संविदा करने और इस अधिनियम के प्रयोजनों के लिए 
						आवश्यक अन्य समस्त बातें करने के लिए सक्षम होगा !</p><br>
						<p>
						परन्तु ऐसी संपत्ति का ऐसा कोई भी पट्टा विक्रय या अंतरण राज्य सरकार के पूर्व अनुमोदन के बिना नहीं किया जायेगा।</p><br>
						<p>
						मुख्यालय
						विश्वविद्यालय का मुख्यालय बीकानेर में होगा जो कुलपति का मुख्यालय होगा।</p><br>
						<p>
						अधिकारिता
						(1) तत्समय प्रवृत किसी भी विधि में अंतर्विष्ट किसी बात के होने पर भी किन्तु राजस्थान विश्वविद्यालय अधिनियमए १९४६ राजस्थान कृषि विश्वविद्यालय बीकानेर अधिनियम, 
						१९८७ (१९८७ का अधिनियम सं. ३९), राजस्थान संस्कृत विश्वविद्यालय अधिनियम, १९९८ (१९९८ का अधिनियम सं. १०), महाराणा प्रताप कृषि और प्रोद्योगिकी विश्वविद्यालय 
						उदयपुर अधिनियम, २००० (२००० का अधिनियम संण् ८) और राजस्थान आयुर्वेद विश्वविद्यालय अधिनियम, २००२ (२००२ का अधिनियम सं. १५) के उपबंधों के अध्यधीन 
						रहते हुएए विश्वविद्यालय कि अधिकारिता का प्रसार, राजस्थान भू.राजस्व अधिनियम, १९५६ (१९५६ का अधिनियम संण् १५) के उपबंधों के अधीन राज्य सरकार द्वारा यथा.अधिसूचित
						, राजस्थान राज्य के बीकानेर खंड के भीतर के समस्त घटक, संबद्ध या स्वायत्त महाविद्यालयों संस्थानों, संस्थानों और विभागों में और राजस्थान राज्य के भीतर के ऐसे अन्य घटक, 
						संबद्ध या स्वायत्त महाविद्यालयों, संस्थानों, संस्थाओं और विभागों में भी होगा जो राज्य सरकार द्वारा, राजपत्र में अधिसूचना द्वाराए विनिर्दिष्ट किये जायें।</p><br>
						<p>
						िश्वविद्यालय के उद्देश्य
						विश्वविद्यालय अन्य प्रयोजनों के साथ-साथ, निम्लिखित प्रयोजनों के लिए स्थापित और निगमित किया हुआ समझा जायेगा –
						विद्या की विभिन्न शाखाओं में शिक्षा देने के लिए उपबन्ध करनाय और
						विद्या की समस्त शाखाओं में अनुसन्धान को अग्रसर करना।</p><br>
						</p></b>
					    <div class="col-sm-6">
					   <img src="university/images/history.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					 <div class="col-sm-6">
					   <img src="university/images/history1.jpg" class="img-responsive" width="100%" height="10%"><br>
					 </div>	
					</div>
	
	
		</div>
		
		</div>
	<br><br><br>
		
		 <div class="row w3-teal" style="height:300px">
		<div class="col-sm-4 w3-text-white w3-border-right w3-border-white" align="center">
			<h3><b class="w3-myfont" style="text-decoration:underline">All Department</b></h3>
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
