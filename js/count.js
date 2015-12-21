
var clicks = 20;
		
			function link() {
				clicks--;
				document.getElementById("clicks").innerHTML = clicks;

				if (clicks == 1) {
				console.log("Answer is 'hey'");
				var str = "Answer is in 'Console'";
				var result = str.link("");
				document.getElementById("demo").innerHTML = result;
				}
			}
			
			
$(function(){
    $("button").on({
        mouseover:function(){
            $(this).css({
                left:(Math.random()*1000)+"px",
                top:(Math.random()*600)+"px",
            });
        }
    });
});
			