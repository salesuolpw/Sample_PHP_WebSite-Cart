<?php
session_start();

if($_SESSION['LOGED'] == true)
{
     
}else{
   header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
 <head>
<link type="text/css" rel="stylesheet" href="menu.css"/>
<title></title>
</head>
<body style="background-image: url('Image/background_generic.jpg')";>
   <ul id="H2">
        <li id="H1"><a id="H" href="home_u.php">HOME</a></li>
        <li id="H1"><a id="H" href="List_u.php">GAME</a></li>
        <li id="H1"><a id="H" href="shop_u.php">SHOP</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus_u.php">About us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap_u.php">Contact us</a></li>
         <li id="H1" style="float:right;"><a id="H" class="active" href="feedback_u.php">Feedback</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="quizTest_u.php">Quiz</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="logout_u.php">LogOut</a></li>
       
        
    </ul>
               
       
    
                        <center><h1><font color="Yellow">CV of Ashan De Vaas</font></h1></center>
            
       <img src="Image/ashan.jpg" >
            <table style="color:white; border-collapse:separate; 
border-spacing:5em;">

<font color="white"><div id="header"></div>
<p id="name">Email : <a href="mailto:ashan.d@gmail.com" target="_blank"><p id="email">ashan.d@gmail.com</p></a></p>
         
    
     <div class="left">
     </div>
     <div class="right">
            <h3>CV Highlights</h3>
            <p>
            <ul>
                <li>Currently going through CS253 – Web Application Engineering and CS61A – Structure & Interpretation of Computer Programs</li>
                <li>Learnt basic Python, JavaScript, HTML, CSS on Codecademy.com.</li>
                <li>An independent, dedicated, efficient person. These attributes are proved through the series of courses I have taken or I am taking as of now independently through online platforms.</li>
                <li>Good Communication Skills, Presentation Skills, attitude towards leadership, authorisation and delegation, conflict resolution and negotiation and a very good team worker.</li></ul>
            </p>
            <h3>Professional Experience</h3>
            <h4 id="company-name">Wingify Software Pvt Ltd</h4>
            <p id="job-title"><strong>Support Engineer (Technical Support)</strong></p>
            <p id="job-responsibilities">Job Responsbilities</p>
            <p>
            <ul>
                <li>Answer customer queries over email / ticketing system</li>
                <li>Interact with our engineering team to get software issues and bugs resolved</li>
                <li>Occasionally interact with customers over Skype or telephone</li>
                <li>Contribute ideas to the team on how customers can be delighted</li></ul>
            </p>
            <center><h3>Educational Qualifications</h3>
          <table style="color:white; border-collapse:separate>
                <tr id="heading">
                    <td>Qualification</td>
                    <td>Board</td>
                    <td>Percentage / Grades</td>
                    <td>Year</td>
                </tr>
                <tr>
                    <td>S.S.C</td>
                    <td>G.S.E.B India</td>
                    <td>75.57%</td>
                    <td>2004</td>
                </tr>
                <tr>
                    <td>H.S.C (Science Stream)</td>
                    <td>G.S.E.B India</td>
                    <td>72.40%</td>
                    <td>2006</td>
                </tr>
                <tr>
                    <td>GDCA (Grad. Dipl in Computer Applications)</td>
                    <td>NIE (National Institute Of Engineering), Mumbai, India</td>
                    <td>A Grade</td>
                    <td>2008</td>
                </tr>
                <tr>
                    <td>B.Sc. (Hons) - Applied Accounting</td>
                    <td>Oxford Brookes University</td>
                    <td>2:1 – Upper Second Class Honours</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>Chartered Accounting - ACCA</td>
                    <td>ACCA Glasgow, UK</td>
                    <td>Passed (1st Attempt)</td>
                    <td>2013</td>
                </tr>
            </table></center>
            <h3>Independent Courses</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">HTML & CSS for Beginners – Web Fundamentals</span> – Codecademy.com</li>
                <li>
                <span id="course-name">Python – Fundamentals and Dynamic Programming </span> - Codecademy.com</li>
                <li>
                <span id="course-name">JavaScript – Programming Basics, JS Apps and Build Games </span> - Codecademy.com</li>
                <li>
                <span id="course-name">CS101: Introduction to Computer Science - Building a Web Crawler</span> - Udacity.com</li>
                <li>
                <span id="course-name">CS50x – Introduction to Computer Science I</span> – edX.org & Harvard University</li>
                <li>
                <span id="course-name">Calculus One</span> - Ohio State University & Coursera.org</li>
                <li>
                <span id="course-name">Introduction to Finance</span> - Coursera.org & University of Michigan</li>
            </ul>
            <h3>Technical Skills</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Operating Systems:</span> DOS, Windows 98, Windows 2000, Windows XP, Windows NT, Windows Server 2003, Windows Vista, Windows 7, Macintosh Computers (OS X), Linux (Ubuntu, Fedora)</li>
                <li>
                <span id="course-name">Application Software:</span> Office 97-2003; Office XP, Office 2007, Office for Mac 2011, iWork ’09, Sage Accounting Software, Sage 50 (Accounting Software), Excel 2003/2007 for Financial Modelling spreadsheets.</li>
                <li>
                <span id="course-name">Programming Skills:</span>HTML, CSS, Python, JavaScript, learning C and C++</li></ul>
            </p>
            <h3>Certifications / Awards:</h3>
            <p>
            <ul>
                <li>Scored highest in ACCA P1 – Governance, Risk & Ethics exam – June 2012 session amongst full time international students at Kaplan Financial, London.</li>
                <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li>
                <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li></ul>
            </p>
            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                A young, determined hard and smart working person. I believe in task based roles and complete ownership of work.
                <li>
                <span id="course-name">Languages Known:</span>English, Hindi, Gujarati and Sindhi</li>
                <li>
                <span id="course-name">Hobbies:</span>I love reading Finance and IT related books / magazines, playing Chess, swimming, listening music, surfing Internet, self-learning through e-courses.</li> </ul>
            </p>
            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Expected Salary:</span>As per company standards</li>
                <li>
                <span id="course-name">Area of Interest:</span>Software Development, Programming, Start-ups, Coding, App Development, Technical Support, Support Engineer, Customer Happiness, Client service, Investment Banking, Corporate Finance, Hedge Funds, Mergers & Acquisitions, Analyst, Equity Research, Business Analysis</li>
                <li>
                <span id="course-name">Joining Date:</span>Immediate</li></ul>
            </p>
            <h3>Declaration</h3>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
<hr>
</font>
          <footer><a href="ashan_u.php" ><img src="Image/top2.png" align="right"></a></footer>
    </body>
</html>