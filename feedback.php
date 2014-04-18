<?php
				ob_start();
				#====================================================================================================
				#	File Name		:	feedback.php
				#----------------------------------------------------------------------------------------------------
				#	Purpose			:	Sending Mail.
				#	Creation Date	:	30 May 2012
				#	Created By		:   Viken Patel
				#   Modified By		: 
				#   Modified Date   :   
				
				$date = date("j F, Y, g:i a");
				$ipaddress = $_SERVER['REMOTE_ADDR'];
				
				$subject=" ";
				$to=" ";
				$body=" ";
				$headers=" ";
					
				$name				= $_POST['name'];
				$country			= $_POST['country'];
				$city				= $_POST['city'];
				$state				= $_POST['state'];
				$phone				= $_POST['phone'];
				$email				= $_POST['email'];
				$feedback			= $_POST['feedback'];

				$subject = "Inquiry"; 				
				$to  = 'viken@ezeetechnosys.com';
				
				$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
				
						
				# Message body				
				$body .= "<table border=0 cellspacing=0 cellpadding=0 style='border: 2px solid #e7e7e7' width=50%>
							<tr>
							  <td colspan=3 align=center style='background:#d9d9d9; padding-top:10px; padding-bottom: 10px; border-bottom: 2px solid #c0c0c0;'>
				<font face='Verdana' color='#640000' size='2.5'><b>Inquiry </b></font></td></tr>
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>Name </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($name)."</font></td>
							</tr> 
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>Country </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($country)."</font></td>
							</tr>
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>City </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($city)."</font></td>
							</tr>
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>State </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($state)."</font></td>
							</tr>
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>Phone </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($phone)."</font></td>
							</tr>
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>Email </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($email)."</font></td>
							</tr>
							
							<tr>
							  <td width=40% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid #c0c0c0; border-right: 2px 
solid #c0c0c0'>
				<font face='Verdana' color='#000000' size='2'>Comments </font></td>
							  <td colspan='2' align=bottom width=60% style='background:#f3f3f3; padding-top:2px; padding-bottom: 2px; padding-left: 12px; border-bottom: 2px solid 
#c0c0c0;'>
				<font face='Verdana' color='#000000' size='2'>".checkurl($feedback)."</font></td>
							</tr>
							 
						  </table>";											
				

				
				echo $body;
				die;
				
				// To send HTML mail, the Content-type header must be set			
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				// Additional headers
				$headers .= 'From: '.$name.'<'.$email.'>'."\r\n";
				
				if($_SERVER['HTTP_HOST']!='localhost')
				{
					mail($to, $subject, $body, $headers);
					$flag="true";
				}	
				$flag="true";
				
				if($flag == "true")
				{
					header("location: thanks.php");
					exit();
				}



// To check and remove URL from data
function checkurl($string)
{
// Stuff that spammers post with:
$spam_string = array('www.','/url]','http://','https://','<script') ;
	$flag=0;
	foreach( $spam_string as $spam_string )
	{
		if ( ereg( $spam_string, $string ) )
		{ 
			return false ;
		}
		else
		{
			$flag=1;
			//return $string;	
		}
	}
	if($flag==1)
	{
		return $string;	
	}
}

	
?>				