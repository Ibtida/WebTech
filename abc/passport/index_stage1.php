
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


<form name="index_stage1" method="POST" action="stage2.php" >


     <table>
     
     	<tr>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Passport application information</h3></td>
     		<td rowspan="100" width="150 px"></td>
     		<td><label>Date of Birth:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td ><input style="width: 300px" type="date" id="birthDate" name="Date1" class="form-control" required></td>
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
     		<td rowspan="3">
               <input type="radio" name="gender" value="Male" required checked>Male<br>
     		<input type="radio" name="gender" value="FeMale" required>Female<br>
     		<input type="radio" name="gender" value="others" required>Others</td>
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
     		<input type="radio" name="deliveryType" value="Regular" checked >Regular<br>
     		<input type="radio" name="deliveryType" value="express">Express
     		</td>
     		
     		<td><label>Birth Id No:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="birthId" type="id" id="id" placeholder="ID" required></td>

     	</tr>
     	<tr>
     		<td colspan="3"><h3>Personal Information</h3></td>
     		<td><label>National Id No:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="NationalIdNo" type="id" id="id" placeholder="ID" required></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Name of Applicant:</label><b style="color: red"> *</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="NameApplicant" placeholder="name" required ></td>
     		
     		<td><label>Tax Id No:</label></td>
     		<td width="40 px"></td>
     		<td><input style="width: 300px" name="TaxIdNo" type="id" id="id" placeholder="ID" ></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>First Part (Given Name):</label></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="FirstPartGN" placeholder="name" required></td>
     		
     		<td><label>Height:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><input style="width: 30px" type="No" id="height" name="Foot" required ><b>cm</b>
     			<input style="width: 30px" type="No" id="height" name="inch" required><b>inch</b>
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Second Part (Surname):</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="name" name="SecondPartSN" placeholder="name" required ></td>
     		
     		<td><label>Religion:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="Religion" required>
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
     		<td><input style="width: 300px" type="email" id="email" name="EmailAddress" placeholder="Email Address" required></td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Name:</label><b style="color: red">*</b></td>
     		
     		<td><input style="width: 300px" type="text" id="Fathername" name="FatherName" placeholder="FatherName" required></td>
     		
     		<td colspan="3"><h3>Citizenship Information</b></h3>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Father's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="FNationality" required>
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td><label>Nationality:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="CitizenNationality" required>
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
     		
     		<td><select style="width: 300px" name="FProfession" required>
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td><label>Citizenship Status:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="CitizenStatus" required>
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
     			<input style="width: 300px" type="text" id="Mothername" name="MotherName" placeholder="MotherName" required >
     		</td>
     		
     		<td><label>Dual Citizenship:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td>
	     		<input type="radio" name="Dcitizenship" value="Yes" required checked>Yes<br>
	     		<input type="radio" name="Dcitizenship" value="No" required>No
	     	</td>

     	</tr>

     	<tr>
     		<td colspan="2"><label>Mother's Nationality:</label><b style="color: red">*</b></td>
     		
     		<td><select style="width: 300px" name="MNationality" required>
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
     		
     		<td><select style="width: 300px" name="MProfession" required>
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
     			<input style="width: 300px" type="text" id="VillageHouse" name="VillageHouse" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Name:</label><b style="color: red"></b></td>
     		
     		<td>
                    <input style="width: 300px" type="text" id="Spousename" name="SpouseName" placeholder="SpouseName" >
     		</td>
     		
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" name="RoadBlockSector" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td colspan="2"><label>Spouse's Nationality:</label><b style="color: red"></b></td>
     		
     		<td><select style="width: 300px" name="SpouseNationality">
     				<option value="Select">~Select~</option>
     				<option value="Bangladeshi">Bangladeshi</option>
     				<option value="Hindustani">Hindustani</option>
     				<option value="Irani">Irani</option>
     				<option value="Pakistani">Pakistani</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>District:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="District" required>
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
     		
     		<td><select style="width: 300px" name="SpouseProfession">
     				<option value="Select">~Select~</option>
     				<option value="Businessman">Businessman</option>
     				<option value="Teacher">Teacher</option>
     				<option value="Engineer">Engineer</option>
     				<option value="Doctor">Doctor</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Police Station:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PoliceStation" required>
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
     		
     		<td><select style="width: 300px" name="MaritalStatus" required>
     				<option value="Select">~Select~</option>
     				<option value="Married">Married</option>
     				<option value="UnMarried">Unmarried</option>
     				<option value="Divorsed">Divorsed</option>

     			</select>
     		</td>
     		
     		<td colspan="2"><label>Post Office:</label><b style="color: red">*</b></td>
     		<td><select style="width: 300px" name="PostOffice1" required>
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
     		
     		<td><select style="width: 300px" name="ApplicantProfession" required>
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
     		
     		<td><select style="width: 300px" name="BCountry" required>
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
     		<td colspan="2"><label>Birth District:</label><b style="color: red">*</b>
               <td><select style="width: 300px" name="Birth_District" required>
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
     			<input style="width: 300px" type="text" id="VillageHouse" name="Village_house" placeholder="Village_house" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		<td>
     			<input style="width: 300px" type="text" id="Road_Block" name="Road_Block" placeholder="Road_Block" >
     		</td>
     	</tr>

     	<tr>
     		<td width="10 px" colspan="3"></td>
     		<td colspan="2"><label>District:</label><b style="color: red">*</b>
               <td><select style="width: 300px" name="District12" required>
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
     		<td><select style="width: 300px" name="Police_Station" required>
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
     		<td><select style="width: 300px" name="Post_Office1" required>
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