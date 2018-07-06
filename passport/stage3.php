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
     <table>
     	<form>

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
	     		
	     		<td><select style="width: 150px" name="country">
     				<option value="BDT">~BDT~</option>
     				<option value="$">$</option>
     				<option value="Euro">Euro</option>
     				<option value="Dinar">Dinar</option>
     				<option value="Rupi">Rupi</option>

     			</select>
     			<input style="width: 150px" type="value" id="input" placeholder="Amount" >
     			</td>
	     		<td colspan="3" width="40 px"></td>
     		
     		</tr>

     		<tr>
	     		<td colspan="2"><label>Date of Payment:</label><b style="color: red">*</b></td>
	     		
	     		<td ><input style="width: 300px" type="date" id="birthDate" class="form-control"></td>
	     		<td colspan="3" width="40 px"></td>
     		
     		</tr>
     		<tr>
     			<td colspan="2"><label>Receipt No:</label><b style="color: red">*</b></td>
	     		<td><input style="width: 300px" type="id" id="id" placeholder="Receipt Number"></td>
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
	     		<input type="submit" value="PREVIOUS PAGE">
	     		<input type="submit" value="SAVE & NEXT">
	     		</td>
     		</tr>
     	</form>
     </table>
</body>
</html>