<html>
<head>
<link rel="stylesheet" style="text/css" href="swimteam.css">
<script language="javascript">
window.onload = function Open() {
    var ans;
    ans = prompt("Enter the Password", " ");
    if(ans != "Kelly") {
        window.location.href="http://localhost:8888/swimteam/welcome.php";
    }
}

</script>

<script src="jquery-1.7.2.js"></script>


</head>



<body>
<div class='mainbox'>
<?php include 'header.php' ?>

<?php include 'navigation.php'; ?>
<br><br>
<font size=18 id='title'>Coachs' Area</font>
<div id='underline'></div>
<br>
<br><br>
Enter in a New Annoucement:<br>
<form method='post' action='welcome.php'>
<input class='1' type='text' size='80' name='text'><br>
<input class='2' type='checkbox' name='important'>Important?<br>
<input type='submit' value='Post Annoucement'>
</form>
<br><br>
<table style='margin-left:10px;background:-webkit-gradient(linear, 0 0, 0 100%, from(gray), to(white));width:97%;text-align:center;border:0px;'>
<th> Recent Annoucements!</th>
</table>
<div class='annoucements'>
<table  style='width:100%;'>

<tr class='whiterows'><td width=90px><?php echo date("M d") ?></td><td><p class='1'></p></td></tr>
<table>
<p class='2'></p>

</div>
<script type='text/javascript'>
$(document).ready(function(){
                  
                  $("input.1").keyup(function(){
                                     $("p.1").text($("input.1").attr("value"));
                                     });
                  
                  $("input.2").click(function(){
                                     
                                     if($("tr.whiterows").css("background-color")=="rgb(255, 165, 0)") {
                                     $("tr.whiterows").css("background-color","lightgray");
                                     } else
                                     $("tr.whiterows").css("background","orange");
                                     });
                  });


</script>
</body>
</html>