$(document).ready(function(e) {
	//login
	$("#login button").click(function(e) {
		e.preventDefault();
		$("#login").toggleClass('was-validated');
		
		username=$("#login input[name='uname']").val();
		password=$("#login input[name='pswd']").val();
		console.log("username: "+username+"| password: "+password);
		
		if(username!='' && password!='') {
			console.log("Proses Login");
			
			$.ajax({
				url: "config/proses.php",
				type: "POST",
				data: "tombol=login&username="+username+"&password="+password,
				dataType:"json"
			})
			.done(function(msg){
				console.log(msg);
				if(msg=="ada"){
					window.location.replace("application/index.php");
				}
				else {
					$(".alert").remove();         
					notifikasi="<div class=\"alert alert-danger alert-dismissable\">";
					notifikasi+="<button aria-hidden=true data-dismiss=alert class=close type=button>×</button>";
					notifikasi+="<strong>FAILED</strong> Incorrect user or password</div>";
					$(notifikasi).insertBefore("#login");
				}
			})
			.fail(function(msg) {
				console.log(msg);
			});
		}
	});

	//menu
	$("#0").addClass('active');
	$(".oy2,.oy3,.oy4,.oy5").hide(); 
	$('.oy1').show();

	$("#0").click(function(){
		$(".oy2,.oy3,.oy4,.oy5").hide(); 
		$('.oy1').show();
		$("#1,#2,#3,#4").removeClass('active');
		$("#0").addClass('active');
		var konten=document.getElementById("a").innerHTML;
		document.getElementById("demo").innerHTML = konten;
		console.log("bisa");
	  });

	$("#1").click(function(){
		$(".oy1,.oy3,.oy4,.oy5").hide(); 
		$('.oy2').show();
		$("#0,#2,#3,#4").removeClass('active');
		$("#1").addClass('active');
		var konten=document.getElementById("b").innerHTML;
		document.getElementById("demo").innerHTML = konten;
		console.log("bisa");
	  });
	
	$("#2").click(function(){
		$(".oy1,.oy2,.oy4,.oy5").hide(); 
		$('.oy3').show();
		$("#0,#1,#3,#4").removeClass('active');
		$("#2").addClass('active');
		var konten=document.getElementById("c").innerHTML;
		document.getElementById("demo").innerHTML = konten;
		console.log("bisa");
	 });

	 $("#3").click(function(){
		$(".oy1,.oy2,.oy4,.oy5").hide(); 
		$('.oy3').show();
		$("#0,#1,#2,#4").removeClass('active');
		$("#3").addClass('active');
		var konten=document.getElementById("d").innerHTML;
		document.getElementById("demo").innerHTML = konten;
		console.log("bisa");
	 });

	 $("#4").click(function(){
		$(".oy1,.oy2,.oy4,.oy5").hide(); 
		$('.oy3').show();
		$("#0,#1,#2,#3").removeClass('active');
		$("#4").addClass('active');
		var konten=document.getElementById("e").innerHTML;
		document.getElementById("demo").innerHTML = konten;
		console.log("bisa");
	 });
});

