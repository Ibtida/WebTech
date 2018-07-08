<?php

 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     $_SESSION['Date1']=$_REQUEST['Date1'];
     $_SESSION['country']=$_REQUEST['country12'];
     $_SESSION['gender']=$_REQUEST['gender'];
     $_SESSION['ApplicationType']='New Application';
     $_SESSION['PassportType']=$_REQUEST['PassportType'];
     $_SESSION['DeliveryType']=$_REQUEST['DeliveryType'];
     $_SESSION['birthId']=$_REQUEST['birthId'];
     $_SESSION['NationalIdNo']=$_REQUEST['NationalIdNo'];
     $_SESSION['NameApplicant']=$_REQUEST['NameApplicant'];
     $_SESSION['TaxIdNo']=$_REQUEST['TaxIdNo'];
     $_SESSION['FirstPartGN']=$_REQUEST['FirstPartGN'];
     $_SESSION['Foot']=$_REQUEST['Foot'];
     $_SESSION['inch']=$_REQUEST['inch'];
     $_SESSION['SecondPartSN']=$_REQUEST['SecondPartSN'];
     $_SESSION['Religion']=$_REQUEST['Religion'];
     $_SESSION['Guardian']=$_REQUEST['Guardian'];
     $_SESSION['EmailAddress']=$_REQUEST['EmailAddress'];
     $_SESSION['FatherName']=$_REQUEST['FatherName'];
     $_SESSION['FNationality']=$_REQUEST['FNationality'];
     $_SESSION['CitizenNationality']=$_REQUEST['CitizenNationality'];

     
     echo $_SESSION['Date1'];
     echo "<br>";
     echo $_SESSION['country'];
     echo "<br>";
     echo $_SESSION['gender'];
     echo "<br>";
     echo $_SESSION['ApplicationType'];
     echo "<br>";
     echo $_SESSION['PassportType'];
     echo "<br>";
     echo $_SESSION['DeliveryType'];
     echo "<br>";
     echo $_SESSION['birthId'];
     echo "<br>";
     echo $_SESSION['NationalIdNo'];
     echo "<br>";
     echo $_SESSION['NameApplicant'];
     echo "<br>";
     echo $_SESSION['TaxIdNo'];
     echo "<br>";
     echo $_SESSION['FirstPartGN'];
     echo "<br>";
     echo $_SESSION['Foot'];
     echo "<br>";
     echo $_SESSION['inch'];
     echo "<br>";
     echo $_SESSION['SecondPartSN'];
     echo "<br>";
     echo $_SESSION['Religion'];
     echo "<br>";
     echo $_SESSION['Guardian'];
     echo "<br>";
     echo $_SESSION['EmailAddress'];
     echo "<br>";
     echo $_SESSION['FatherName'];
     echo "<br>";
     echo $_SESSION['FNationality'];
     echo "<br>";
     echo $_SESSION['CitizenNationality'];



     
     
 }

?>            
               
       




<!DOCTYPE html>
<html>
<head>
	<title>passport</title>
	<style>
		table, th, td {
    border: none;
    border-collapse: collapse;
}
	</style>
</head>
<body>

     <h2 align="center">PASSPORT APPLICATION - STAGE 1</h2>
     <p align="center"><i style="color: red">Before felling up the online application form read the <a href="www.guideline.com">guidelines</a> carefully</i></p>
     <p align="center">Filed marked with <b style="color: red">(*)</b> are mandatory</p>
     <hr/>


<form name="index_stage1" method="POST" action="" >


     <table>
     
     	<tr>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Passport application information</h3></td>
     		<td rowspan="100" width="150 px"></td>
     		<td><label>Date of Birth:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td ><input style="width: 300px" type="date" id="birthDate" name="Date1" class="form-control"></td>
     	</tr>
     	<tr>
     		
     		<td><label>Applying In:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td >

     			<select name="country12" style="width: 300px" required>
     				<option value="Bangladesh">Bangladesh</option>
     				<option value="India">India</option>
     				<option value="England">England</option>
     				<option value="Australia">Australia</option>
     				<option value="China">China</option>

     			</select>

     		</td>
     		
     		<td rowspan="3"><label>Gender:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td rowspan="3"><input type="radio" name="gender" value="Male">Male<br>
     		<input type="radio" name="gender" value="FeMale">Female<br>
     		<input type="radio" name="gender" value="others">Others</td>
     	</tr>

     	<tr>
     		
     		<td><label>Application Type:</label></td>
     		<td width="40 px"></td>
     		<td><b>NEW APPLICATION</b></td>
     		
     		<td width="40 px"></td>
     		
     	</tr>

     	<tr>
     		
     		<td><label>Passport Type:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td >
     			<select style="width: 300px" name="PassportType" required>
     				<option value="Select">~Select~</option>
     				<option value="A">A</option>
     				<option value="B">B</option>
     				<option value="C">C</option>

     			</select>
     		</td>
     		
     		<td width="40 px"></td>
     
     	</tr>

     	<tr>
     		
     		<td><label>Delivery Type:</label></td>
     		<td width="40 px"></td>
     		<td>
     		<input type="radio" name="deliveryType" value="Regular" >Regular<br>
     		<input type="radio" name="deliveryType" value="express">Express
     		</td>
     		
     		<td><label>Birth Id No:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="birthId" type="id" id="id" placeholder="ID" ></td>

     	</tr>
     	<tr>
     		<td colspan="3"><h3>Personal Information</h3></td>
     		<td><label>National Id No:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="NationalIdNo" type="id" id="id" placeholder="ID" ></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Name of Applicant:</label><b style="color: red"> *</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="NameApplicant" placeholder="name" ></td>
     		
     		<td><label>Tax Id No:</label></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="TaxIdNo" type="id" id="id" placeholder="ID" ></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>First Part (Given Name):</label></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="FirstPartGN" placeholder="name" required></td>
     		
     		<td><label>Height:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 30px" type="No" id="height" name="Foot" ><b>cm</b>
     			<input style="width: 30px" type="No" id="height" name="inch"><b>inch</b>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Second Part (Surname):</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="SecondPartSN" placeholder="name" ></td>
     		
     		<td><label>Religion:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="Religion">
     				<option value="Select">~Select~</option>
     				<option value="Muslim">Muslim</option>
     				<option value="Hindu">Hindu</option>
     				<option value="Others">Others</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="3"><p>Guardian
     		<input type="checkbox" name="guardian" value="guardian">
     		 <b style="color: red">tick</b> only if applicant is legally adapted</p></td>
     		
     		<td><label>Email:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" type="text" id="email" name="EmailAddress" placeholder="Email Address"></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Name:</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="Fathername" name="FatherName" placeholder="FatherName" ></td>
     		
     		<td colspan="3"><h3>Citizenship Information</b></h3>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="FNationality">
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td><label>Nationality:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="CitizenNationality">
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="FProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td><label>Citizenship Status:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="CitizenStatus">
     				<option value="Select">~Select~</option>
     				<option value="Birth">Birth</option>
     				<option value="Tourist">Tourist</option>
     				<option value="others">Others</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		
     		<td><label>Mother's Name:</label><b style="color: red">*</b></td>
     		<td width="40 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="Mothername" placeholder="MotherName" >
     		</td>
     		
     		<td><label>Dual Citizenship:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td>
	     		<input type="radio" name="Dcitizenship" value="Yes" >Yes<br>
	     		<input type="radio" name="Dcitizenship" value="No">No
	     	</td>

     	</tr>

     	<tr>
     		<td colspan="2"><label>Mother's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MNationality">
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><h4>Present Address</h4></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Mother's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td><label>Village/House:</label></td>
     		<td width="40 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="VillageHouse" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Name:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="MProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Nationality:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="SpNationality">
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>District:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">~Select~</option>
     				<option value="Dhaka">Dhaka</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Profession:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="SpProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Police Station:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Marital Status:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MaritalStatus">
     				<option value="Select">~Select~</option>
     				<option value="Married">Married</option>
     				<option value="UnMarried">Unmarried</option>
     				<option value="Divorsed">Divorsed</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Post Office:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PostOffice">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Applicant's Profession:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="SpProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="3"><h4>Permanent Address:</h4></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Country of Birth:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="BCountry">
     				<option value="Select">~Select~</option>
     				<option value="Bangladesh">Bangladesh</option>
     				<option value="India">India</option>
     				<option value="France">France</option>
     				<option value="Italy">Italy</option>

     			</select>
     		</td>
     		
     		<td colspan="3"><p>
     		<input type="checkbox" name="Same" value="Same">Same as Above</p></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Birth District:</label><b style="color: red">*</b><td><select style="width: 300px" name="Birth_District">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     		
     		<td><label>Village/House:</label></td>
     		<td width="40 px"></td>
     		<td>
     			<input style="width: 300px" type="text" id="VillageHouse" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>District:</label><b style="color: red">*</b><td><select style="width: 300px" name="District">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Police Station:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Post Office:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PostOffice">
     				<option value="Select">~Select~</option>
     				<option value="Banani">Banani</option>
     				<option value="Bogra">Bogra</option>
     				<option value="Khulna">Khulna</option>
     				<option value="kustia">Kustia</option>

     			</select>
     		</td>
     	</tr>

     	<tr>
     		<td height="30 px" width="10 px" colspan="6"></td>
     		
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td align="right" colspan="3"> 
     		<button>SAVE NOW & CONTINUE IN THE FUTURE<button>
     		<input type="submit" name="saveNext" value="SAVE & NEXT">
     		</td>
     		
     		
     	</tr>

     	<tr>
     		<td height="40 px" width="10 px" colspan="6"></td>
     		
     	</tr>

     </table>
     </form>
     

</body>
</html>