<html>
<head>

<?php
    
    $MYSQL_server_name = "localhost";
    $MYSQL_server_username = "root";
    $MYSQL_server_password = "root";
    $DB_name = "persontest";
    
    $server = @mysql_connect($MYSQL_server_name, $MYSQL_server_username, $MYSQL_server_password);
    if (!$server) {
        echo "Could not get server";
        exit();
    }
    
    $db = @mysql_select_db($DB_name);
    if (!$db) {
        echo "Could not get database";
        exit();
    }

    if($_POST['text'] != "") {
        
        if($_POST['important']=="on")
            $important=1;
        else
            $important=0;
        
        
        $text=$_POST['text'];
        $date = time();

        $query="INSERT INTO announcements (text,important,date) VALUES('$text',$important,$date)";
        if(!@mysql_query($query)) {
            echo "<script type='text/javascript'>alert('Unsuccessfully entered')</script>";
        } 
    }
    
    ?>


<link rel="stylesheet" style="text/css" href="SwimTeam.css">
</head>

<body>
<div class='mainbox'>
<?php include 'header.php' ?>

<?php include 'navigation.php'; ?>
<br>
<br><br>
<font size=18 id='title'>Millburn Swim Team</font>
<div id='underline'></div>

<font size=2 style='margin-left:10px;'>This site is brought to you by the Team Parents and is unaffiliated with Millburn Township</font>
<br><br>
<p style='margin-left:10px;margin-right:15px;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Welcome,</font> Parents and Swimmers to the homepage of Millburn 2012 Swim Team. We are in a new division this year, and we are very excited for a great season. On this website you will find important announcements from the coaches, the dates and times for our schedule, as well as directions to all the pools we will travel to. We hope you find this to be a valuable resource!
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For those who have not signed up, there are links to the Millburn Township website to register online. We encourage you to do so!</p>

<p style='text-align:right;margin-right:180px;margin-bottom:0px;'>Heres to a Great Summer!</p><p style='text-align:right;margin-right:170px;margin-top:0px;'></p>


<br><br>
<table id='announcementheader' style='width:97%;margin-left:10px;'>
<th> Recent Announcements!</th>
</table>
<div class='annoucements'>
<table  style='width:100%;'>
<?php
    $query = "SELECT * FROM announcements ORDER BY date DESC";
    $sorted= @mysql_query($query);
    while( $info= @mysql_fetch_array($sorted)) {
        $date = date('F d', $info['date']);
        if($info['important']==1) {
            echo "<tr class='whiterows' style='background:orange'><td width=90px>&nbsp;".$date."</td><td>".$info['text']."</td></tr>";
        } else
            echo "<tr class='whiterows'><td width=90px>&nbsp;".$date."</td><td>".$info['text']."</td></tr>";
    }
    ?>

</table>
</div>
<br><br>

<p style='margin-left:10px;'>
<font size=6>Join the Swim Team!</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Millburn Swim Team is a great program for children aged 6-18. It incorporates swimmers of all levels and abilities. For one month during the summer, the team practices and competes in meets against local towns. If you have not already joined, it is not too late! Go to <a href='http://www.twp.millburn.nj.us/departments/recreation'>Millburn Recreation Dept.</a> and register for the team.
</p>
</div>


</body>

</html>