<?php

 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     //stage 1
      $_SESSION['Date1']=$_REQUEST['Date1'];
     $_SESSION['country']=$_REQUEST['country12'];
     $_SESSION['gender']=$_REQUEST['gender'];
     $_SESSION['ApplicationType']='New Application';
     $_SESSION['PassportType']=$_REQUEST['PassportType'];
     $_SESSION['deliveryType']=$_REQUEST['deliveryType'];
     $_SESSION['birthId']=$_REQUEST['birthId'];
     $_SESSION['NationalIdNo']=$_REQUEST['NationalIdNo'];
     $_SESSION['NameApplicant']=$_REQUEST['NameApplicant'];
     $_SESSION['TaxIdNo']=$_REQUEST['TaxIdNo'];
     $_SESSION['FirstPartGN']=$_REQUEST['FirstPartGN'];
     $_SESSION['Foot']=$_REQUEST['Foot'];
     $_SESSION['inch']=$_REQUEST['inch'];
     $_SESSION['SecondPartSN']=$_REQUEST['SecondPartSN'];
     $_SESSION['Religion']=$_REQUEST['Religion'];
     $_SESSION['guardian']=$_REQUEST['guardian'];
     $_SESSION['EmailAddress']=$_REQUEST['EmailAddress'];
     $_SESSION['FatherName']=$_REQUEST['FatherName'];
     $_SESSION['FNationality']=$_REQUEST['FNationality'];
     $_SESSION['CitizenNationality']=$_REQUEST['CitizenNationality'];
     $_SESSION['FProfession']=$_REQUEST['FProfession'];
     $_SESSION['CitizenStatus']=$_REQUEST['CitizenStatus'];
     $_SESSION['MotherName']=$_REQUEST['MotherName'];
     $_SESSION['Dcitizenship']=$_REQUEST['Dcitizenship'];
     $_SESSION['MNationality']=$_REQUEST['MNationality'];
     $_SESSION['MProfession']=$_REQUEST['MProfession'];
     $_SESSION['VillageHouse']=$_REQUEST['VillageHouse'];
     $_SESSION['SpouseName']=$_REQUEST['SpouseName'];
     $_SESSION['RoadBlockSector']=$_REQUEST['RoadBlockSector'];
     $_SESSION['SpouseNationality']=$_REQUEST['SpouseNationality'];
     $_SESSION['District']=$_REQUEST['District'];
     $_SESSION['SpouseProfession']=$_REQUEST['SpouseProfession'];
     $_SESSION['PoliceStation']=$_REQUEST['PoliceStation'];
     $_SESSION['MaritalStatus']=$_REQUEST['MaritalStatus'];
     $_SESSION['PostOffice1']=$_REQUEST['PostOffice1'];
     $_SESSION['ApplicantProfession']=$_REQUEST['ApplicantProfession'];
     $_SESSION['BCountry']=$_REQUEST['BCountry'];
     $_SESSION['Birth_District']=$_REQUEST['Birth_District'];
     $_SESSION['Village_house']=$_REQUEST['Village_house'];
     $_SESSION['Road_Block']=$_REQUEST['Road_Block'];
     $_SESSION['District12']=$_REQUEST['District12'];
     $_SESSION['Police_Station']=$_REQUEST['Police_Station'];
     $_SESSION['Post_Office1']=$_REQUEST['Post_Office1'];

     

}
?>


<?php 

     // echo 'page 1 value <br>';
     // echo $_SESSION['Date1'];
     // echo "<br>";
     // echo $_SESSION['country'];
     // echo "<br>";
     // echo $_SESSION['gender'];
     // echo "<br>";
     // echo $_SESSION['ApplicationType'];
     // echo "<br>";
     // echo $_SESSION['PassportType'];
     // echo "<br>";
     // echo $_SESSION['deliveryType'];
     // echo "<br>";
     // echo $_SESSION['birthId'];
     // echo "<br>";
     // echo $_SESSION['NationalIdNo'];
     // echo "<br>";
     // echo $_SESSION['NameApplicant'];
     // echo "<br>";
     // echo $_SESSION['TaxIdNo'];
     // echo "<br>";
     // echo $_SESSION['FirstPartGN'];
     // echo "<br>";
     // echo $_SESSION['Foot'];
     // echo "<br>";
     // echo $_SESSION['inch'];
     // echo "<br>";
     // echo $_SESSION['SecondPartSN'];
     // echo "<br>";
     // echo $_SESSION['Religion'];
     // echo "<br>";
     // echo $_SESSION['guardian'];
     // echo "<br>";
     // echo $_SESSION['EmailAddress'];
     // echo "<br>";
     // echo $_SESSION['FatherName'];
     // echo "<br>";
     // echo $_SESSION['FNationality'];
     // echo "<br>";
     // echo $_SESSION['CitizenNationality'];
     // echo "<br>";
     // echo $_SESSION['FProfession'];
     // echo "<br>";
     // echo $_SESSION['CitizenStatus'];
     // echo "<br>";
     // echo $_SESSION['MotherName'];
     // echo "<br>";
     // echo $_SESSION['Dcitizenship'];
     // echo "<br>";
     // echo $_SESSION['MNationality'];
     // echo "<br>";
     // echo $_SESSION['MProfession'];
     // echo "<br>";
     // echo $_SESSION['VillageHouse'];
     // echo "<br>";
     // echo $_SESSION['SpouseName'];
     // echo "<br>";
     // echo $_SESSION['RoadBlockSector'];
     // echo "<br>";
     // echo $_SESSION['SpouseNationality'];
     // echo "<br>";
     // echo $_SESSION['District'];
     // echo "<br>";
     // echo $_SESSION['SpouseProfession'];
     // echo "<br>";
     // echo $_SESSION['PoliceStation'];
     // echo "<br>";
     // echo $_SESSION['MaritalStatus'];
     // echo "<br>";
     // echo $_SESSION['PostOffice1'];
     // echo "<br>";
     // echo $_SESSION['ApplicantProfession'];
     // echo "<br>";
     // echo $_SESSION['BCountry'];
     // echo "<br>";
     // echo $_SESSION['Birth_District'];
     // echo "<br>";
     // echo $_SESSION['Village_house'];
     // echo "<br>";
     // echo $_SESSION['Road_Block'];
     // echo "<br>";
     // echo $_SESSION['District12'];

     // echo "<br>";
     // echo $_SESSION['Police_Station'];
     // echo "<br>";
     // echo $_SESSION['Post_Office1'];


     

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

     <form name="Stage2.php" method="POST" action="stage3.php">
     <table>
     	
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
     		
     		<td><input style="width: 300px" type="email" id="email" name="Email00" placeholder="Email Address" required ></td>
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
     	</table>
     	</form>
     
</body>
</html>