<!-- <?php
//print_r($_POST);
//print_r($_GET);
//echo "Hello".$_POST;
?>
 --><html>
<head>
	<title>Add Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     
	<style>
	body{
		background-image: url("images/one.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.required{
		color:red;
	}
	</style>
	


</head>
<body>	
	
	<form class="form-horizontal"  method="POST" enctype="multipart/form-data" action="json_add_post.php/"<?php echo $arr['id']?>>
			<table class="table">
				<tr>
					<td colspan="5"><h2>Employee Detail Form</h2>
					</td>
				</tr>
				
				
				<tr>
					<td><b>Personal Details</b></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>
						<select>
						<option>Mr.</option>
						<option>Ms.</option>
					</select>
				    </td>
				    <td><input type="text" name="firstName" placeholder="Name" required  value="<?php echo !empty($arr->firstName)?$arr->firstName:''?>"><span class="required">*</span></td>
				    <td><input type="text" name="middleName" placeholder="Middlename"></td>
				    <td><input type="text" name="lastName" placeholder="lastname" required><span class="required">*</span></td>
				</tr>
				<tr>
			    	<td>Gender:<span class="required">*</span></td>
			    	<td><input type="radio" name="gender" value="male" required>Male</td>
			    	<td><input type="radio" name="gender" value="female" required>Female</td>
			    </tr>
			    <tr>
			    	<td>BirthDate:<span class="required">*</span></td>
			    	<td><input type="date" name="birthDate" required></td>
			    </tr>
			    <tr>
			    	<td rowspan="2">Address:</td>
			    	<td colspan="2"><input type="text" size="40" name="address" placeholder="Address Line1" required><span class="required">*</span></td>
			    	<td colspan="2"><input type="text" size="40" name="address2" placeholder="Address line2"></td>
			    </tr>
			    <tr align="left">
			    	<td><input type="text" name="district" placeholder="district" required><span class="required">*</span></td>
			    	<td><input type="text" name="state" placeholder="state" required><span class="required">*</span></td>
			    	<td><input type="text" name="pincode" pattern="[0-9]{6}" placeholder="pincode" maxlength="6" size="8"></td>
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td><input type="text" name="jobTitle"></td>
			    </tr>
			    <tr>
			    	<td>Department<span class="required">*</span></td>
			    	<td><select name="department" required>
			    		<option value="Information Technology">Information Technology</option>
			    		<option value="Operations">Operations</option>
			    		<option value="Product">Product</option>
			    	    </select></td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:<span class="required">*</span></td>
			    	<td><input type="date" name="commenceDate" required></td>
			    </tr>
			    <tr>
			    	<td>Employement status<span class="required">*</span></td>
			    	<td><input type="radio" name="jobStatus" value="FTE" required> Full-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Part-time" required>Part-Time</td>
			    	<td><input type="radio" name="jobStatus" value="Temporary" required>Temporary</td>
			    	<td><input type="radio" name="jobStatus" value="casual" required>Casual</td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b></td>
			    </tr>
			    <tr>
			    	<td>Bank:<span class="required">*</span></td>
			    	<td><input type="text" name="bankName" placeholder="Bank name" required></td>
			    	<td><input type="text" name="bankBranch" placeholder="Bank Branch" required></td>
			    </tr>
			    <tr>
			    	<td>Account Number:<span class="required">*</span></td>
			    	<td><input type="text" name="accNo" required></td>
			    </tr>

			    <tr>
				<td colspan="2"><input type="submit" class="btn btn-outline-danger" name="submit">
				</td>
			    </tr>
		</table> 	
		</form>
		
    <script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>		
	</body>
	</html>
				

		
