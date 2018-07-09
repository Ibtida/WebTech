<?php

 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     //stage 2
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


		// echo "Page 2 value";
		// echo "<br>";
  //     echo $_SESSION['OfficeNo'];
  //    echo "<br>";
  //    echo $_SESSION['PassportNo'];
  //    echo "<br>";
  //    echo $_SESSION['ResidenceNo'];
  //    echo "<br>";
  //    echo $_SESSION['PlaceOfIssue'];
  //    echo "<br>";
  //    echo $_SESSION['MobileNo'];
  //    echo "<br>";
  //    echo $_SESSION['DateOfIssue'];
  //    echo "<br>";
  //    echo $_SESSION['RI_Reason'];
  //    echo "<br>";
  //    echo $_SESSION['Name00'];
  //    echo "<br>";
  //    echo $_SESSION['Country00'];
  //    echo "<br>";
  //    echo $_SESSION['Village_House1'];
  //    echo "<br>";
  //    echo $_SESSION['PoliceStation00'];
  //    echo "<br>";
  //    echo $_SESSION['PostOffice00'];
  //    echo "<br>";
  //    echo $_SESSION['Contact_No'];
  //    echo "<br>";
  //    echo $_SESSION['Email00'];
  //    echo "<br>";
  //    echo $_SESSION['Relationship00'];
  //    echo "<br>";


 	



  //    echo 'DOB:'.$_SESSION['Date1'];
  //    echo "<br>";
  //    echo $_SESSION['country'];
  //    echo "<br>";
  //    echo $_SESSION['gender'];
  //    echo "<br>";
  //    echo $_SESSION['ApplicationType'];
  //    echo "<br>";
  //    echo $_SESSION['PassportType'];
  //     /*if($_REQUEST[PassportType]='Select')
  //              {
  //                   echo "abc";
  //              }
  //              else
  //              {
  //                   echo $_SESSION['PassportType'];
  //              }*/
  //    echo "<br>";
  //    echo $_SESSION['deliveryType'];
  //    echo "<br>";
  //    echo $_SESSION['birthId'];
  //    echo "<br>";
  //    echo $_SESSION['NationalIdNo'];
  //    echo "<br>";
  //    echo $_SESSION['NameApplicant'];
  //    echo "<br>";
  //    echo $_SESSION['TaxIdNo'];
  //    echo "<br>";
  //    echo $_SESSION['FirstPartGN'];
  //    echo "<br>";
  //    echo $_SESSION['Foot'];
  //    echo "<br>";
  //    echo $_SESSION['inch'];
  //    echo "<br>";
  //    echo $_SESSION['SecondPartSN'];
  //    echo "<br>";
  //    echo $_SESSION['Religion'];
  //    echo "<br>";
  //    echo $_SESSION['guardian'];
  //    echo "<br>";
  //    echo $_SESSION['EmailAddress'];
  //    echo "<br>";
  //    echo $_SESSION['FatherName'];
  //    echo "<br>";
  //    echo $_SESSION['FNationality'];
  //    echo "<br>";
  //    echo $_SESSION['CitizenNationality'];
  //    echo "<br>";
  //    echo $_SESSION['FProfession'];
  //    echo "<br>";
  //    echo $_SESSION['CitizenStatus'];
  //    echo "<br>";
  //    echo $_SESSION['MotherName'];
  //    echo "<br>";
  //    echo $_SESSION['Dcitizenship'];
  //    echo "<br>";
  //    echo $_SESSION['MNationality'];
  //    echo "<br>";
  //    echo $_SESSION['MProfession'];
  //    echo "<br>";
  //    echo $_SESSION['VillageHouse'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseName'];
  //    echo "<br>";
  //    echo $_SESSION['RoadBlockSector'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseNationality'];
  //    echo "<br>";
  //    echo $_SESSION['District'];
  //    echo "<br>";
  //    echo $_SESSION['SpouseProfession'];
  //    echo "<br>";
  //    echo $_SESSION['PoliceStation'];
  //    echo "<br>";
  //    echo $_SESSION['MaritalStatus'];
  //    echo "<br>";
  //    echo $_SESSION['PostOffice1'];
  //    echo "<br>";
  //    echo $_SESSION['ApplicantProfession'];
  //    echo "<br>";
  //    echo $_SESSION['BCountry'];
  //    echo "<br>";
  //    echo $_SESSION['Birth_District'];
  //    echo "<br>";
  //    echo $_SESSION['Village_house'];
  //    echo "<br>";
  //    echo $_SESSION['Road_Block'];
  //    echo "<br>";
  //    echo $_SESSION['District12'];

  //    echo "<br>";
  //    echo $_SESSION['Police_Station'];
  //    echo "<br>";
  //    echo $_SESSION['Post_Office1'];

     
 }

?>





<!DOCTYPE html>
<html>
<head>
	<title>Passport_Stage3</title>
	<style>
		table, th, td {
    border: none;
    border-collapse: collapse;
}
	</style>
</head>
<body>
	<h2 align="center">PASSPORT APPLICATION - STAGE 3</h2>
     <p align="center">Online Application ID:</p>
     <p align="center">Filed marked with <b style="color: red">(*)</b> are mandatory</p>
     <hr/>

     <form name="Stage3.php" method="POST" action="test.php">
     <table>
     	

	     	<tr>
		     	<td rowspan="100" width="250 px"></td>
	     		<td colspan="3"><h4>Payment Information</h4></td>
	     		<td colspan="3" width="40 px"></td>
     		
     		</tr>

     		<tr>
     			<td><label>Payment Type:</label></td>
	     		<td width="40 px"></td>
	     		<td>
	     		<input type="radio" name="payment" value="Regular" >Online<br>
	     		<input type="radio" name="payment" value="express">Non-Online
	     		</td>
	     		<td colspan="3" width="40 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="3">
	     		<input type="checkbox" name="Same" value="Same"><i>Skip Payment</i><br>
	     		</td>

	     		<td colspan="4" width="40 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Amount:</label><b style="color: red">*</b></td>
	     		
	     		<td><select style="width: 150px" name="AmountType">
     				<option value="BDT">~BDT~</option>
     				<option value="$">$</option>
     				<option value="Euro">Euro</option>
     				<option value="Dinar">Dinar</option>
     				<option value="Rupi">Rupi</option>

     			</select>
     			<input style="width: 150px" type="value" id="input" name="Amount" placeholder="Amount" >
     			</td>
	     		<td colspan="3" width="40 px"></td>
     		
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Date of Payment:</label><b style="color: red">*</b></td>
	     		
	     		<td ><input style="width: 300px" type="date" id="birthDate" name="DateOfPayment" class="form-control"></td>
	     		<td colspan="3" width="40 px"></td>
     		
     		</tr>
     		<tr>
     			<td colspan="2"><label>Receipt No:</label><b style="color: red">*</b></td>
	     		<td><input style="width: 300px" type="id" id="id" name="ReceiptNo" placeholder="Receipt Number"></td>
	     		<td colspan="3" width="40 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Name Of Bank:</label></td>
	     		<td><select style="width: 300px" name="Bank">
	     				<option value="Select">~Select~</option>
	     				<option value="Dhaka bank">Dhaka Bank</option>
	     				<option value="Dutch">Dutch Bangla</option>
	     				<option value="United">UCB</option>
	     				<option value="Modhu">Modhumoti Bank</option>

	     			</select>
	     		</td>
	     		<td colspan="3" width="40 px"></td>
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Name Of Branch:</label></td>
	     		<td><select style="width: 300px" name="Branch">
	     				<option value="Select">~Select~</option>
	     				<option value="Dhaka">Dhaka</option>
	     				<option value="Banani">Banani</option>
	     				<option value="Farmgate">Farmgate</option>
	     				<option value="Mohakhali">Mohakhali</option>

	     			</select>
	     		</td>
	     		<td colspan="3" width="40 px"></td>
     		</tr>

     		<tr>
     			<td height="40 px" width="10 px" colspan="6"></td>
     		
     		</tr>

     		<tr>
	     		<td align="right" colspan="3"> 
	     		<button> PREVIOUS PAGE</button>
	     		<input type="submit" name="saveNext" value="SAVE & NEXT">
	     		</td>
     		</tr>
     	</table>
     	</form>
     
</body>
</html>