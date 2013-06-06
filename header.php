<script src="jquery-1.7.2.js"></script>
<script type='text/javascript'>
function FadeIt() {
    
    if($("a.header").attr("value") == 1)
    {
    $("a.header")
        .html('Latest Announcement: ')
        .fadeIn(400)
        .delay(4000)
        .fadeOut(400)
        .attr("value",2);
    } else {
        $("a.header")
            .html('Questions? Email Coach Kelly: millswim@gmail.com')
            .fadeIn(400)
            .delay(4000)
            .fadeOut(400)
            .attr("value",1);
    }
    
    
}

$(document).ready(function(){
                  
                  $("a.header")
                  .fadeIn(400)
                  .html('Questions? Email Coach Kelly: millswim@gmail.com')
                  .delay(4000)
                  .fadeOut(400);


                  setInterval("FadeIt()", 4800);
    
                  });
    

</script>

<div  id='header'><a class='header' value=1>
</a>
</div>