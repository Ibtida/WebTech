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
     	<form>
     		<tr>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Applicant Contact Information</h3></td>
     		<td rowspan="100" width="150 px"></td>
     		<td colspan="3"><h3>Old Passport Information</h3></td>
     		
     		
	     	</tr>

	     	<tr>
	     		<td><label>Office No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" placeholder="Office Number"></td>
	     		
	     		<td><label>Passport No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" placeholder="Passport Number"></td>
	     	</tr>

	     	<tr>
	     		<td><label>Residence No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="id" id="id" placeholder="Residence Number"></td>
	     		
	     		<td><label>Place Of Issue:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="text" id="PIssue" placeholder="Place of Issue"></td>

	     	</tr>

	     	<tr>
	     		<td><label>Mobile No:</label></td>
	     		<td width="40 px"></td>
	     		<td><input style="width: 300px" type="text" id="id" placeholder="Mobile Number"></td>
	     		
	     		<td><label>Date Of Issue:</label></td>
	     		<td width="40 px"></td>
	     		<td ><input style="width: 300px" type="date" id="birthDate" class="form-control"></td>

	     	</tr>

	     	<tr>
     		
     		<td colspan="3"><h3>Re-Issue Reason</h3></td>
     		
     		<td><label>Date Of Issue:</label></td>
     		<td width="40 px"></td>
     		<td >
     			<select style="width: 300px" name="I_Reason">
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
     		
     		<td><input style="width: 300px" type="text" id="name" placeholder="Name" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>Country:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="country">
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
     		
     		<td><input style="width: 300px" type="text" id="Village/House" placeholder="Village|House" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td colspan="2"><label>Road/Block/Sector:</label></td>
     		
     		<td><input style="width: 300px" type="text" id="Road1" placeholder="Road" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>District:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="District">
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
     		<td><select style="width: 300px" name="PoliceStation">
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
     		<td><select style="width: 300px" name="PostOffice">
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
     		
     		<td><input style="width: 300px" type="id" id="Number" placeholder="Contuct Number" ></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	</tr>

	     	<tr>
     		<td colspan="2"><label>Email:</label></td>
     		
     		<td><input style="width: 300px" type="text" id="email" placeholder="Email Address"></td>
     		<td colspan="3" width="40 px"></td>
     		
     	</tr>

     	<tr>
     		<td><label>Relationship:</label><b style="color: red"> *</b></td>
     		<td width="40 px"></td>
     		<td><select style="width: 300px" name="Relationship">
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
     		<input type="submit" value="PREVIOUS PAGE">
     		<input type="submit" value="SAVE & NEXT">
     		</td>
     	</tr>
     	
     	</form>
     </table>
</body>
</html>