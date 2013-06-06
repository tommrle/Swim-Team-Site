
<script src="jquery-1.7.2.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
                  $("a.1").mouseenter(function(){
                                      $("a.1").html('Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">>></font>');
                                      });
                  $("a.1").mouseleave(function(){
                                      $("a.1").html('Home');
                                      });
                  
                  $("a.2").mouseenter(function(){
                                      $("a.2").html('Calendar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">>></font>');
                                      });
                  $("a.2").mouseleave(function(){
                                      $("a.2").html('Calendar');
                                      });
                  
                  $("a.3").mouseenter(function(){
                                      $("a.3").html('Directions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">>></font>');
                                      });
                  $("a.3").mouseleave(function(){
                                      $("a.3").html('Directions');
                                      });
                  $("a.4").mouseenter(function(){
                                      $("a.4").html('Team Info &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">>></font>');
                                      });
                  $("a.4").mouseleave(function(){
                                      $("a.4").html('Team Info');
                                      });
                  
                  });



</script>

<style type='text/css'>
td a {display: inline-block; height:100%; width:100%; background:royalblue; padding:5px;}
td a:hover {background-color: black; }
</style>
<div id='sidebar'>

</div>
<div id='sidebox' >
<table width=130px>
<tr><td><img src='mswimminglogov2.png' width=100%; /></td></tr>
<tr><td><a class='1' href='welcome.php' style='text-decoration:none;color:white;' >Home</a></td></tr>

<tr><td><a class='2' href='calendar.php' style='text-decoration:none;color:white;'>Calendar </a></td></tr>
<tr><td><a class='3' href='directions.php' style='text-decoration:none;color:white;'>Directions </a></td></tr>
<tr><td><a class='4' href='teaminfo.php' style='text-decoration:none;color:white;'>Team Info</a></td></tr>
</table>
</div>

