<?php
session_start();
$_SESSION["Choice"]= "Day";
?>
<html>
<head>
      <title>Pace Coaching Center | Faculty</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
</head>
<body class="custom-background" >
<div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_faculty_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">
			<h3>Faculty</h3>
                        </div>  <br><br>
                        <div id="transaction">
                        <br><br><br>  <br><br>
                             <form action="faculty_profile.php" >
                             <input type=button name="profile" class="list" value= "View Profile" onclick = "self.location='faculty_profile.php' "/><br><br>
                             </form>
                             <select class="list" onchange="javascript:handleSelect(this)" >
                                  <option type=button name="timetable" value="" class="list" selected font-align="center" >View Regular Timetable</option>
                                  <option type=button name="week" value="faculty_timetable1" class="list">By Week</option>
                                  <option type=button name="day" value="faculty_timetable_day" class="list">By Day</option>
                                  <option type=button name="batch" value="faculty_timetable_batch" class="list">By Batch</option>
                             </select>
                             <script type="text/javascript">
                                    function handleSelect(elm)
                                    {
                                    window.location = elm.value+".php";
                                    }
                             </script>
                             <br><br>
                             <input type=button name="books" class="list" value= "Update Books" onclick="self.location = 'update_books.php' " />
                             <br><br>
                        </div>
                        <br><br>
                        <div id="matter">
<FORM action = "faculty_last.php" method = "POST" class="list1" >

Enter Day :
<select name = "Day">
 <option type=button value="Monday" class="">Monday</option>
 <option type=button value="Tuesday" class="">Tuesday</option>
 <option type=button value="Wednesday" class="">Wednesday</option>
 <option type=button value="Thursday" class="">Thursday</option>
 <option type=button value="Friday" class="">Friday</option>
 <option type=button value="Saturday" class="">Saturday</option>
 <option type=button value="Sunday" class="">Sunday</option>
</select>
<br><br>
<input type = "Submit" name = "Submit" value = "View Timetable">
</form>
       </div>
       <div id="footer">
                        <p class="quote">It is the supreme art of the teacher to awaken joy in creative expression and knowledge.</p>
                        <p class="quote1">- Albert Einstein</p>
       </div>
</body>