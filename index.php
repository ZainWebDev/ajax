<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax</title>
</head>
<body>
	<h1 style="background-color: #02DB87;height:50px;text-align: center;padding-top:20px;margin:0px;">Ajax Lesson No 1 </h1>
	<div style="background-color: #023B87;height:50px;text-align: center;padding-top:20px;margin:0px;"><button id="load_data">Load Data</button> </div>
    <table id="table_data" style="text-align:center;margin:10px auto" border="1px" >
    	<tr>
    	<th>ID</th>
    	<th>NAME</th>
 		</tr>
 		<tr>
    	<th>1</th>
    	<th>ZAIN</th>
 		</tr>
    </table>

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script>
  	$(document).ready(function(){
  		$("#load_data").on("click",function(e){
  			$.ajax({
  				url:"load_data.php",
  				type:"POST",
  				success:function(data){
  				$('#table_data').html(data);	
  				}
  			});
  		});
  	});
  </script>
</body>
</html>