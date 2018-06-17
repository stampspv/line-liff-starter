<?

if(isset($_GET['name'])){
	var_dump($_GET);
	$servername = "csku.science";
	$username = "spppaper_dutch";
	$password = "OvS5LHDc";
	$dbname = "spppaper_dutch";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
}else{

}

?>

<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<body>
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<center><h1>UPPERCUZ DEV 5.6</h1></center>
			<form action="/regis.php" method="get">
			  <div class="form-group">
			    <label>ชื่อ-นามสกุล :</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="email">E-mail :</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
			    <label>เบอร์โทรศัพท์ :</label>
			    <input type="phone" class="form-control" id="tel" name="tel">
			  </div>
			  <div class="form-group">
			    <label>UserID :</label>
			    <input type="text" class="form-control" id="userid" name="userid" readonly="readonly">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>

	<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
	<script src="liff-starter.js"></script>
	<script>
	window.onload = function (e) {
	    liff.init(function (data) {
	    	console.log("-> 1");
	        initializeApp(data);
	    });
	};
	function initializeApp(data) {
		console.log("-> 2");
		$('iput[name="userid"]').val("sd");
	    // document.getElementById('languagefield').textContent = data.language;
	    // document.getElementById('viewtypefield').textContent = data.context.viewType;
	    // document.getElementById('useridfield').textContent = data.context.userId;
	}
	</script>

</body>