//pop in and pop out smiley tab
$(document).ready(function() {
    // Hide on start
    $(".smiley-container").hide();
    $(".smiley-container").animate({"opacity": "0"}, "slow");
	
    // Handle mouse over for image
    $(".emoji_button").click(function() {
            // This one is when the mouse enters
            $(".smiley-container").show(); 
    		$(".smiley-container").animate({"opacity": "1"}, "slow");
       });
    $(".emoji_button").dblclick(function() {				//on double click the emoticon tab closes
        // ...and when it hides.
        $(".smiley-container").hide();
		$(".smiley-container").animate({"opacity": "0"}, "slow");
		});
}); 


//For selecting and sending smileys to messaging text
	$(document).ready(function(){
		$('.button').click(function(){
			var chars = $(this).attr('chars');	
			var msg = document.getElementById("messageToBeSent").value;
			msg = msg + " " + chars + " ";
			document.getElementById("messageToBeSent").value = msg;
		});
	});
		
//Loading Users who are online
	$(document).ready(function(e){
		$.ajaxSetup({cache:false});
		setInterval(function(){
			$('#users').load("Online_Users.php");
		}, 1000);
	});	
	
//Loading Messages to div id = "content"
	
	$(document).ready(function(e){
	$.ajaxSetup({cache:false});
	setInterval(function(){
		$('#content').load('Display_Messages.php');
	}, 1000); //delay has been set to 1000 miliseconds
	});

	
//displaying noticications
function notify(){	
		if(!window.Notification){
			alert("Sorry! Your Web Browser does not support Web Notifications API.");
		}else{
			if(Notification.permission !== "granted"){
				Notification.requestPermission(function(permission){
					if(permission === "denied"){
						return alert("Permission Request Denied!");
					}
				});
			}
			
			var title = document.getElementById("myUsername").value;
			var options = {
				body:  document.getElementById("messageToBeSent").value,
				icon: "notifications/icon.png",
				//sound: "notifications/pop.mp3"
			};
			
			var n = new Notification(title, options);
			//setTimeout(n.close.bind(n), 4000); 
		}
}
	
//validating sending notifications	
function notifyMe(){
	if(document.getElementById("messageToBeSent").value != ""){
		notify();
	}										
}