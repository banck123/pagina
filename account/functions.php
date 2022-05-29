<?php
function sendit($to,$subject,$mes) {
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers = 'From:info@internationalinsurancecompanysolution.business>';
$headers = 'Cc:info@internationalinsurancecompanysolution.business';
$message =' 
 '.$mes.'
 
            
 Powered by internationalinsurancecompanysolution.business 
                  
       
 
 ';

//sending mail
// if successful
mail($to,$subject,$message,$headers);
  
}

?>