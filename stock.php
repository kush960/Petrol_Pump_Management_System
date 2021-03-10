<html>
<head>
	<title> Stocks | Petrol Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<style>
		.card{
			margin-left:750px;
			margin-top:200px;
		}
		.card-body{
			width:300px;
			height:350px;
			box-shadow:2px 2px 2px 2px;
			text-align:center;
		}
	</style>
</head>
<body>
	<header>
		<nav>
			<h1>Petrol Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homered" href="assignproject.php">Project Status</a></li>
                <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
                <li><a class="homeblack" href="stock.php">Stock</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="divider"></div>
	
	
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
	    <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                    <div class="card-body">
					      <h2 class="title">Stock Of Fuel</h2>
		                 <form action="stockinsert.php" method="POST" enctype="multipart/form-data">
							 <div>
								 <h4>Capacity Of Petrol Tanker </h4>
								 <p>10,000 litres</p>
								 <input type="number" name='petrolprice' placeholder ="Total Petrol Sold Today" required="required">
							 </div>
							 <div>
								 <h4>Capacity Of Deisel Tanker </h4>
								 <p>10,000 litres</p>
								 <input type="number" name='deiselprice' placeholder ="Total Deisel Sold Today" required="required"><br>
							 </div>
							 <div>
							 <br><button class="btn btn--radius btn--green" type="submit">SUBMIT</button>
							 </div>

						 </form>
						     
                    </div>
                </div>
            </div>
        </div>
	</div>



</body>
<html>