
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<span>User Uploads</span>
<style>
.custom-card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
    transition: 0.3s;
}

.custom-card-caption {
  color: black;
  font-size: 22px;
}

.custom-card-button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.custom-card-button:hover {
  opacity: 0.7;
}
.custom-card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
}
.custom-card-header{
	background-color:#673ab71a;
	border-bottom: 3px solid  #5346b9f5;
	text-align:left;

}
.custom-card-user-dp {
  max-width: 40px;
  max-height: 40px;
border-radius:50%;
	margin-top:10px;
}


.user-dp span{
	margin: 25%;
}
.custom-card-user-name{
	float:right;
margin-right:10px;
margin-top:20px;
}
</style>
<hr>
<body>
<?php
include 'db.php';
$db=new DB();
$result=$db->execute_query('select DISTINCT email,name,image from user ORDER BY RAND() LIMIT 10');
while($row=$db->fetch_result($result)){
	$sql='select * from images where uploaded_by="'.$row['email'].'" ORDER BY RAND() LIMIT 5';
$resImg=$db->execute_query($sql);
while($rowImage=$db->fetch_result($resImg)){ 
	if(file_exists($rowImage['image']))
echo "<br><div class='custom-card'><div class='custom-card-header'><img class='custom-card-user-dp' src='".$row['image']."'> <a href='#' class='custom-card-user-name'>".$row['name']."</a></div>
  <img src='".$rowImage['image']."' alt='user upload' style='width:100%'>
  <h1  style='display:none'>Tailored Jeans</h1>
  <p  class='custom-card-caption' style='display:none'>".$rowImage['caption']."</p>
  <p><button class='custom-card-button'>Show Caption</button></p>
</div><br>";
}

}
?>
</body>
<script>
$('.custom-card-button').click(function(){
                // check paragraph once toggle effect is completed
                if($(this).parent().siblings(".custom-card-caption").is(":visible")){
				
					$(this).parent().siblings(".custom-card-caption").hide();
					$(this).html('Show Caption');
                } else{
              	$(this).parent().siblings(".custom-card-caption").show();
				$(this).html('Hide Caption');
                }
           
	//$('#p').show();
	$('#h').show();
});
</script>