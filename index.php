<!DOCTYPE html>
<html>
<head>
	<title>Registeation Form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="http://127.0.0.1:5500/index.php" method="post">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Registration Form - Input student's Detail Information</h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input required="true" type="text" class="form-control" id="usr">
                    </div>
                   
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input required="true" type="email" class="form-control" id="email" placeholder="Nhap email">
                    </div>
                    <div class="form-group">
                      <label for="birthday">Birthday:</label>
                      <input type="date" class="form-control" id="birthday">
                    </div>
                    <div class="form-group">
                      <label for="telenumber">telephone number:</label>
                      <input required="true" type="number" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                      <label for="confirmation_pwd">Identification number:</label>
                      <input required="true" type="number" class="form-control" id="confirmation_pwd">
                    </div>
                    <div class="form-group">
                      <label for="address">Address:</label>
                      <input type="text" class="form-control" id="address">
                    </div>
    
                    <div class="dropdown form-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Province/City
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Ha Noi</a>
                          <a class="dropdown-item" href="#">Nam Dinh</a>
                          <a class="dropdown-item" href="#">Thai Binh</a>
                          <a class= "dropdown-item"href="#">Ninh Binh</a>
                          <a class="dropdown-item" href="#">Hai Duong</a>
    
                        </div>
                    </div>
    
    
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </div>
        </div>
    </form>
	
</body>
</html>