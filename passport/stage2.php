<?php

 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     $_SESSION['OfficeNo']=$_REQUEST['OfficeNo'];
     $_SESSION['PassportNo']=$_REQUEST['PassportNo'];
     $_SESSION['ResidenceNo']=$_REQUEST['ResidenceNo'];
     $_SESSION['PlaceOfIssue']=$_REQUEST['PlaceOfIssue'];
     $_SESSION['MobileNo']=$_REQUEST['MobileNo'];
     $_SESSION['DateOfIssue']=$_REQUEST['DateOfIssue'];
     $_SESSION['RI_Reason']=$_REQUEST['RI_Reason'];
     $_SESSION['Name00']=$_REQUEST['Name00'];
     $_SESSION['Country00']=$_REQUEST['Country00'];
     $_SESSION['Village_House1']=$_REQUEST['Village_House1'];
     $_SESSION['Road_Block']=$_REQUEST['Road_Block'];
     $_SESSION['District00']=$_REQUEST['District00'];
     $_SESSION['PoliceStation00']=$_REQUEST['PoliceStation00'];
     $_SESSION['PostOffice00']=$_REQUEST['PostOffice00'];
     $_SESSION['Contact_No']=$_REQUEST['Contact_No'];
     $_SESSION['Email00']=$_REQUEST['Email00'];
     $_SESSION['Relationship00']=$_REQUEST['Relationship00'];
   

     
     echo $_SESSION['OfficeNo'];
     echo "<br>";
     echo $_SESSION['PassportNo'];
     echo "<br>";
     echo $_SESSION['ResidenceNo'];
     echo "<br>";
     echo $_SESSION['PlaceOfIssue'];
     echo "<br>";
     echo $_SESSION['MobileNo'];
     echo "<br>";
     echo $_SESSION['DateOfIssue'];
     echo "<br>";
     echo $_SESSION['RI_Reason'];
     echo "<br>";
     echo $_SESSION['Name00'];
     echo "<br>";
     echo $_SESSION['Country00'];
     echo "<br>";
     echo $_SESSION['Village_House1'];
     echo "<br>";
     echo $_SESSION['PoliceStation00'];
     echo "<br>";
     echo $_SESSION['PostOffice00'];
     echo "<br>";
     echo $_SESSION['Contact_No'];
     echo "<br>";
     echo $_SESSION['Email00'];
     echo "<br>";
     echo $_SESSION['Relationship00'];
     echo "<br>";
     
  
     



     
     
 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Passport Stage2</title>
	<style>
		table, th, td {
    border: none;
    border-collapse: collapse;
}
	</style>
</head>
<body>
	<h2 align="center">PASSPORT APPLICATION - STAGE 2</h2>
     <p align="center">Online Application ID:</p>
     <p align="center">Filed marked with <b style="color: red">(*)</b> are mandatory</p>
     <hr/>
     <table>
     	<form name="Stage2.php" method="POST" action="stage3.php">
     		<tr>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Applicant Contact Information</h3></td>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Old Passport Information</h3></td>
     		
     		
	     	</tr>

	     	<tr>
	     		<td><label>Office No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" name="OfficeNo" placeholder="Office Number"></td>
	     		
	     		<td><label>Passport No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" name="PassportNo" placeholder="Passport Number"></td>
	     	</tr>

	     	<tr>
	     		<td><label>Residence No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" name="ResidenceNo" placeholder="Residence Number"></td>
	     		
	     		<td><label>Place Of Issue:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="text" id="PIssue" name="PlaceOfIssue" placeholder="Place of Issue"></td>

	     	</tr>

	     	<tr>
	     		<td><label>Mobile No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="text" id="id" name="MobileNo" placeholder="Mobile Number"></td>
	     		
	     		<td><label>Date Of Issue:</label></td>
	     		<td width="40 px"></td>
	     		<td ><input style="width: 300px" type="date" id="birthDate" name="DateOfIssue" class="form-control"></td>

	     	</tr>

	     	<tr>
     		
     		<td colspan="3"><h3>Emergency Contact Persons Details</h3></td>
     		
     		<td><label>Re-Issue Reason:</label></td>
     		<td width="40 px"></td>
     		<td >
     			<select style="width: 300px" name="RI_Reason">
     				<option value="~SELECT~">~SELECT~</option>
     				<option value="A">A</option>
     				<option value="B">B</option>
     				<option value="C">C</option>
     				<option value="D">D</option>

     			</select>
     		</td>
	     	</tr>

	     	<tr>
     		<td colspan="2"><label>Name:</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="Name00" placeholder="Name" required ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>Country:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="Country00" required >
     				<option value="Select">~Select~</option>
     				<option value="Bangladesh">Bangladesh</option>
     				<option value="India">India</option>
     				<option value="France">France</option>
     				<option value="Italy">Italy</option>

     			</select>
     		</td>
     		<td colspan="3" width="40 px"></td>
     	</tr>

     	<tr>
     		<td style="height: 30px" colspan="7" width="40 px"></td>
     	</tr>

     	<tr>
     		<td colspan="3">
     		<input type="checkbox" name="Same" value="Same"><i>Same as Permanent Address</i><br>
     		<input type="checkbox" name="Same" value="Same"><i>Same as Present Address</i></td>

     		<td colspan="4" width="40 px"></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Village/House:</label></td>
     		
     		<td><input style="width: 300px" type="text" id="Village/House" name="Village_House1" placeholder="Village|House" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		
     		<td><input style="width: 300px" type="text" id="Road1" name="Road_Block" placeholder="Road" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>District:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="District00" required >
     				<option value="Select">~Select~</option>
     				<option value="Dhaka">Dhaka</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Kustia">Kustia</option>
     				<option value="sylhet">sylhet</option>

     			</select>
     		</td>
     		<td colspan="3" width="40 px"></td>
     	</tr>

     	<tr>
     		<td><label>Police Station:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="PoliceStation00" required >
     				<option value="Select">~Select~</option>
     				<option value="Dhaka">Dhaka</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Banani">Banani</option>
     				<option value="Kuril">Kuril</option>

     			</select>
     		</td>
     		<td colspan="3" width="40 px"></td>
     	</tr>

     	<tr>
     		<td><label>Post Office:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="PostOffice00" required >
     				<option value="Select">~Select~</option>
     				<option value="Dhaka">Dhaka</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Banani">Banani</option>
     				<option value="Kuril">Kuril</option>

     			</select>
     		</td>
     		<td colspan="3" width="40 px"></td>
     	</tr>

     	</tr>

	     	<tr>
     		<td colspan="2"><label>Contact No:</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="id" id="Number" name="Contact_No" placeholder="Contuct Number" required ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	</tr>

	     	<tr>
     		<td colspan="2"><label>Email:</label></td>
     		
     		<td><input style="width: 300px" type="text" id="email" name="Email00" placeholder="Email Address" required ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>Relationship:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="Relationship00" required >
     				<option value="Select">~Select~</option>
     				<option value="Father">Father</option>
     				<option value="Mother">Mother</option>
     				<option value="Brother">Brother</option>
     				<option value="Uncle">Uncle</option>

     			</select>
     		</td>
     		<td colspan="3" width="40 px"></td>
     	</tr>

     	<tr>
     		<td style="height: 25px" colspan="5" width="40 px"></td>
     		<td align="center" colspan="2"> 
     		<button> PREVIOUS PAGE</button>
               <input type="submit" name="saveNext" value="SAVE & NEXT">
     		</td>
     	</tr>
     	
     	</form>
     </table>
</body>
</html>