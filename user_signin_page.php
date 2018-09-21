<?php
include("db.php");
session_start();
$email=$_POST['signinemail'];
$pwd=$_POST['signinpwd'];
$db=new DB();
	$result=$db->execute_query("select * from user where email='".$email."' and pswd=PASSWORD('".$pwd."')");
	//$row=$db->fetch_result($result);
	if($db->num_rows($result)==0){
		echo "Incorrect password";
	}
	else
	{
$_SESSION['loggedin']=true;
$_SESSION['username']=$email;
	}
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

?>
<html>
<?php include("head.php");?>
<style>.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
	    overflow: hidden
  border: 2px solid gray;
  background-color: #59698d!important;
    color: #fff!important;
  padding: 8px 20px;
 border-radius: 10em;
  font-size: 20px;
  font-weight: bold;
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    padding-top: 0.84rem;
    padding-right: 2.14rem;
    padding-bottom: 0.84rem;
    padding-left: 2.14rem;
    font-size: .81rem;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: .375rem;
    border: 0;
	user-select: none;
    -webkit-tap-highlight-color: transparent;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.rounded-circle {
    border-radius: 25%!important;
    border-top-left-radius: 85% !important;
    border-top-right-radius: 85% !important;
    border-bottom-right-radius: 85% !important;
    border-bottom-left-radius: 85% !important;
}
</style>
<body color="black">
<div class="text-center row">
<div class="col-md-12">
  <img id="imgPre" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="img-thumbnail rounded-circle" alt="...">
</div>
  </div>
<div class="text-center upload-btn-wrapper">
  <button class="btn">Upload a file</button>
  <input type="file" id="imgInp" name="myfile" />
</div>
</body>
<script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#imgPre').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
</html>
