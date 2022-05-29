
<div class="col-md-12 col-lg-12 mb-12">
							<div class="card card-md">
								<div><br>

									<strong style="padding-left:10px;">QUICK MONEY TRANSFER</strong>
								</div>
								<div>
<form action="?fund" method="POST" enctype="multipart/form-data" name="transfer" id="transfer">									
									
									
										<table class="table" style="margin-bottom:0px;">
                                        
                                        
                                        <tbody><tr>
										<td>
                                        <div class="form-group">
										<input type="text" class="form-control" style="margin-bottom:0px; margin-top:0px; " name="beneficiary" id="beneficiary" placeholder="Beneficiary (Account Name)" required="">
									</div>										</td>
										
										
										<td colspan="2" style="margin-bottom:0px;"><div class="form-group">
                                          <input type="text" class="form-control" style="margin-bottom:0px; margin-top:0px;" name="acctnumber" id="acctnumber" placeholder="Account Number" required="">
										</div>                     													</td>
										  </tr>
												
													<tr>
													  <td width="50%" style="margin-bottom:0px;">
                                        	<div class="form-group">
                                        	    <input list="browsers" placeholder="Search or select bank..."  class="form-control border-input" id="bankname">
                                        	    <datalist id="browsers" >

<option>...Choose Bank...</option>
<?php
$query2="SELECT * FROM banks ";
$result2=$conn->query($query2);
if($result2->num_rows>0) {
while ($row2=$result2->fetch_assoc()) {
$bs=$row2["bank"]; $c=$row2["country"]; $ids=$row2["id"];
echo "<option>$bs</option>";

}}
?> 
                                             </datalist>
                                                
                                                    </div> 
</td>
													  <td colspan="2" style="margin-bottom:0px;"><div class="form-group">
                                                        <input type="text" class="form-control" style="margin-bottom:0px;" name="bankadd" id="bankadd" placeholder="Bank Address" required>
													  </div></td>
													</tr>
													<tr>
													  <td style="margin-bottom:0px;"><div class="form-group">
                                                        <input type="text" class="form-control" style="margin-bottom:0px;" name="bankcode" id="bankcode" placeholder="Swift Code(optional)">
													  </div></td>
														<td colspan="2"><div class="form-group">
  <input type="text" class="form-control" style="margin-bottom:0px;" name="routnumber" id="routnumber" placeholder="Routing Number / IBAN">
</div></td>
													</tr>
													<tr>
														<td style="margin-bottom:0px;"><div class="form-group">
                                                          <input type="text" class="form-control input value2" style="margin-bottom:0px;" name="amount" id="amount" placeholder="Amount" required="">
                                                          <div class="error" style="display:none">Insufficient fund</div>
														  															
                                                  														
															
                                                          <input name="hidden" type="hidden" id="hidden" value="">
                                                        </div></td>
                                                        
                                                        
                                                        	<td style="margin-bottom:0px;"><div class="form-group">
                                                          <input type="text" class="form-control input value2" style="margin-bottom:0px;" name="desc" id="desc" placeholder="Description" required="">
                                                           
														  															
                                                  														
															
                                                          
                                                        </div></td>
													   
													    <td width="22%" style="margin-bottom:0px;"> <?php  echo "Balance: ". $cur; ?>
		<input type="text" class="form-control" style="margin-bottom:0px;" name="balance"   placeholder="Balance" value="<?php  echo $awa; ?>" readonly="">
		</td>
													</tr>
									  </tbody></table>

									<div class="form-group">
                       
					</div>
				<span style="margin-left:10px;">
									<input name="type" type="hidden" value="Debit">
									<input name="userid" type="hidden" value="1234567890">
                                    <input name="fname" type="hidden" value="Bank    ">
                                    <input name="lname" type="hidden" value="Demo">
                                    <input name="mname" type="hidden" value="">
                                    <input name="email" type="hidden" value="enodataltd@gmail.com">
									<input type="hidden" name="date" value="Sun 21st Jun 2020 12:08:18pm">
									<input type="hidden" name="currency" value="£">
									<input type="hidden" name="status" value="0">
									<input name="phone" type="hidden" value="07052258555">
									
									<div class="waves-input-wrapper waves-effect waves-light"><input name="submit" type="submit" value="Transfer" class="btn btn-primary" id="submit"></div>
									
            </span>
									<input type="hidden" name="MM_insert" value="transfer">

								  </form>
								</div>
									</div>
					  </div>
					