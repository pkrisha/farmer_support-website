<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login - Whole Body Counting : : ESL, KAIGA</title>
<link rel="stylesheet" href="css/home_style.css" type="text/css" />
<STYLE type=text/css>
.login

	
}
</STYLE>

<SCRIPT language=Javascript>
function load()
{
var mytext = document.getElementById("ECNO"); 
mytext.focus();
}

function Left(str, n){
	if (n <= 0)
	    return "";
	else if (n > String(str).length)
	    return str;
	else
	    return String(str).substring(0,n);
}



function validate_emp_fields()
{
  if (document.login.ECNO.value < 1)
   {
      window.alert("Please enter your ECNo!");
      document.login.ECNO.focus();
      return false;
	  
   }
   if (document.login.MyPass.value.length==0)
   {
      window.alert("Please enter your password!");
      document.login.MyPass.focus();
      return false;
   }
   
  
   
  // document.login.action = 'http://10.32.2.13/Dept/esl/check_n_forward.php';
  // document.login.action =  echo $action; ?>;
   //'http://10.32.2.251/web/auth/check_n_fwd_test.php';
    
   return true;
}

function validate_ag_fields()
{
  if (document.aglogin.agId.value.length==0)
   {
      window.alert("Please enter valid memberId!");
      document.aglogin.agId.focus();
      return false;
   }
   if (document.aglogin.MyPass.value.length==0)
   {
      window.alert("Please enter your password!");
      document.aglogin.MyPass.focus();
      return false;
   }
   return true;
}

</SCRIPT>

<SCRIPT language=JavaScript>

function closewindow(){
window.close();
}
</SCRIPT>

</head>
<!-- The structure of this file is exactly the same as 2col_rightNav.html;
     the only difference between the two is the stylesheet they use -->
<body onload="load();">
<div id="main">
<div id="masthead">
  
 
</div>
<!-- end masthead -->
<div id="content">

<hr class="noscreen" />
   
   <br/>
  

<form id="Login" name="login" action="http://10.32.2.251/web/auth/check_n_fwd_test.php" method="post" onSubmit=" return validate_emp_fields();">

<INPUT type="hidden" name="URL" value="http://10.32.111.242/soft/jaya/esl_wbc/wbc_report.php">

<TABLE class=border id=TABLE1 cellSpacing=0 cellPadding=0 width="80%" 
align=center border=0>
  
  <TR>
    <TD>
      <TABLE cellSpacing=1 cellPadding=5 width="100%" border=0>
        
        <TR>
          <TD><div align="center"><B>WBC DATA CENTRE<B><FONT 
            style="FONT-FAMILY: monospace; BACKGROUND-COLOR: #6974b5" 
            color=white><STRONG></STRONG></FONT></B></B></div>
            </TD></TR>
        <TR>
          <TD class=back>
            <TABLE width="100%" border=0>
              
              <TR>
                <TD class=back vAlign=top>
                <BR/>
                  <table class=border cellSpacing=0 cellPadding=0 width="80%" 
                  align=center border=0>
                    
                    <tr>
                      <td>
                        <table width="100%" border=1 bgcolor="#FFFFCC">
                          
                          <tr>
                            <td class=info align=middle><B>Non- Employee LOGIN <B></B></B></TD></TR>
                          <tr>
                            <td>
                              <table style="width:100%;border:0px black solid">
                                
	                                <tr>
	                                <td class="back2" align="right">Emp. No:</td>
	                                <td class="back2"><input type="text" name="ECNO" size="10"  maxlength="7"/></td></tr>
	                                <tr>
	                                <td class=back2 align=right>Password:</td>
	                                <td class="back2"><input type="password" name="MyPass" size="10px" maxlength="10px" /></td>
	                                </tr>
	                                <tr>
		                                <td class="back2"></td>
		                                <td class="back2" align="left">
		                                	<input type="submit" name="submit" value="Login"/>
		                                </td>
		                            </tr>
	                    </table>
	                    	</td>	
	                    	</tr>
	                    </table>
	                    	</td>
	                    	</tr>
	                    </table>
                  			</td>
                  			</tr>
                  		</table>
                  			</td>
                  			</tr>
                  			</table>
                  			</td>
                  			</tr>
                  			</table>
                  			</td>
                  			</tr>
                  		</table>
                  			</td>
                  			</tr>
                  		</table>
                  			</td>
                  			</tr>
                  		</table>
	     
  </form>
   
</div>
 
  
<!--end navbar -->
<div id="siteInfo"><?php include('footer.php');?>  </div>
<br />
</div>
</body>
</html>
