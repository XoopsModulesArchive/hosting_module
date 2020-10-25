<?php

include '../../mainfile.php';
require_once 'template/config.php';
require XOOPS_ROOT_PATH . '/header.php';
include 'header.php';
?>

<html>
<head>
<meta name="GENERATOR" content="xoops-hosting-module (http://www.gethostedhere.com)">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
<title>xoops webhosting module</title>
</head>
<p align="center"><strong><font 
face=Tahoma size=3>Choose The Plan You Need!</font>    
</strong> </p>
<body bgcolor="#ffffff">
<h1 align="center">
<table id="AutoNumber2" 
style="WIDTH: 400px; BORDER-COLLAPSE: collapse; HEIGHT: 240px" 
borderColor=#111111 cellSpacing=0 cellPadding=0 width=400 border=0>
<tr>
<td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    height="100%">
<div align="center">
<table bordercolor="#000000" cellspacing="0" cellpadding="2" width="400" border="1" 
      >
<tr bgcolor="#666666">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=400 bgColor=#006699 colSpan=5>
<font 
            style="FONT-SIZE: 11pt" face="Arial, Helvetica, sans-serif" 
            color=#ffffff>
<b>Monthly 
            Plans</b></font></td></tr>
<tr bgcolor="#999999">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Hosting Plan</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Space</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Bandwidth</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64><b >
<font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >
Monthly</font></b></td>
<td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87><div 
align=center ><b ><font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >PayPal</font></b></div> 
      
</td></tr><tr>
<td 
style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000>
<font style="FONT-SIZE: 11pt" face="Tahoma" 
           >
      
Starter</font>
</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
style="FONT-SIZE: 9pt" face =Tahoma >  
<?php print $p1_space ?></font>&nbsp;</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#8000000><font 
style="FONT-SIZE: 9pt" face  =Tahoma >  
<?php print $p1_transfer ?></font>&nbsp;</td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b>$</b></font><b 
            ><font face="Arial, Helvetica, sans-serif" 
            color=#ffffff size=2 
            ><?php print $p1_price ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Starter Monthly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1MOSTARTER">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p1_price ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="M">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Semi-Pro</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_space ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_transfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p2_price ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Semi-Pro Monthly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1MOSEMIPRO">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p2_price ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="M">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Advanced</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_space ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_transfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p3_price ?></b></font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Starter Monthly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1MOADVANCED">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p3_price ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="M">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr></table></div></td></tr>
  <tr>
    <td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    width="100%">&nbsp;</td></tr></table></h1>
<p align="center">

</body>
</html>

<body bgcolor="#ffffff">
<h1 align="center">
<table id="AutoNumber2" 
style="WIDTH: 400px; BORDER-COLLAPSE: collapse; HEIGHT: 240px" 
borderColor=#111111 cellSpacing=0 cellPadding=0 width=400 border=0>
<tr>
<td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    height="100%">
<div align="center">
<table bordercolor="#000000" cellspacing="0" cellpadding="2" width="400" border="1" 
      >
<tr bgcolor="#666666">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=400 bgColor=#006699 colSpan=5>
<font 
            style="FONT-SIZE: 11pt" face="Arial, Helvetica, sans-serif" 
            color=#ffffff>
<b>Yearly 
            Plans (25% Savings)</b></font></td></tr>
<tr bgcolor="#999999">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Hosting Plan</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Space</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Bandwidth</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64><b >
<font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >
Yearly</font></b></td>
<td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87><div 
align=center ><b ><font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >PayPal</font></b></div> 
      
</td></tr><tr>
<td 
style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000>
<font style="FONT-SIZE: 11pt" face="Tahoma" 
           >
      
Starter</font>
</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
style="FONT-SIZE: 9pt" face =Tahoma >  
<?php print $p1_yearspace ?></font>&nbsp;</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
style="FONT-SIZE: 9pt" face  =Tahoma >  
<?php print $p1_yeartransfer ?></font>&nbsp;</td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b>$</b></font><b 
            ><font face="Arial, Helvetica, sans-serif" 
            color=#ffffff size=2 
            ><?php print $p1_yearprice ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Starter Yearly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1YRSTARTER">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p1_yearprice ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Semi-Pro</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_yearspace ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_yeartransfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p2_yearprice ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Semi-Pro Yearly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1YRSEMIPRO">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p2_yearprice ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Advanced</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_yearspace ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_yeartransfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p3_yearprice ?></b></font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">





<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Advanced Yearly Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="1YRADVANCED">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p3_yearprice ?>">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>



</div></td></tr></table></div></td></tr>
  <tr>
    <td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    width="100%">&nbsp;</td></tr></table></h1>
<p align="center">


</body>
</html>


<html>
<head>
<meta name="GENERATOR" content="xoops-hosting-module (http://www.gethostedhere.com)">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
<title>xoops hosting module</title>
</head>
<body bgcolor="#ffffff">
<h1 align="center">
<table id="AutoNumber2" 
style="WIDTH: 400px; BORDER-COLLAPSE: collapse; HEIGHT: 240px" 
borderColor=#111111 cellSpacing=0 cellPadding=0 width=400 border=0>
<tr>
<td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    height="100%">
<div align="center">
<table bordercolor="#000000" cellspacing="0" cellpadding="2" width="400" border="1" 
      >
<tr bgcolor="#666666">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=400 bgColor=#006699 colSpan=5>
<font 
            style="FONT-SIZE: 11pt" face="Arial, Helvetica, sans-serif" 
            color=#ffffff>
<b>5-Year 
            Plans (50% Savings + 100% More Space)</b></font></td></tr>
<tr bgcolor="#999999">
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Hosting Plan</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Space</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75>
<b>
<font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            >Bandwidth</font></b></td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64><b >
<font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >
Monthly</font></b></td>
<td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87><div 
align=center ><b ><font face="Arial, Helvetica, sans-serif" color="#ffffff" size="2" 
           >PayPal</font></b></div> 
      
</td></tr><tr>
<td 
style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000>
<font style="FONT-SIZE: 11pt" face="Tahoma" 
           >
      
Starter</font>
</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
style="FONT-SIZE: 9pt" face =Tahoma >  
<?php print $p1_5space ?></font>&nbsp;</td><td style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#8000000><font 
style="FONT-SIZE: 9pt" face  =Tahoma >  
<?php print $p1_5transfer ?></font>&nbsp;</td>
<td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b>$</b></font><b 
            ><font face="Arial, Helvetica, sans-serif" 
            color=#ffffff size=2 
            ><?php print $p1_5price ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">




<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Starter 5-Year Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="5YRSTARTER">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p1_5price ?>">
<input type="hidden" name="p3" value="5">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>



</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Semi-Pro</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_5space ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p2_5transfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p2_5price ?></font></b></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">




<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Semi-Pro 5-Year Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="5YRSEMIPRO">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p2_5price ?>">
<input type="hidden" name="p3" value="5">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>




</div></td></tr>
        <tr>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=120 bgColor=#008000><font 
            style="FONT-SIZE: 11pt" face=Tahoma 
            >Advanced</font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=70 bgColor=#008080><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_5space ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=75 bgColor=#800000><font 
            style="FONT-SIZE: 9pt" face=Tahoma><?php print $p3_5transfer ?></font>&nbsp;</td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=64 bgColor=#006699><font 
            face="Arial, Helvetica, sans-serif" color=#ffffff size=2 
            ><b 
            >$<?php print $p3_5price ?></b></font></td>
          <td 
          style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
          width=87>
            <div align="center">


<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="image" src="images/pay2.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="<?php print $paypal_email ?>">
<input type="hidden" name="item_name" value="Advanced 5-Year Hosting Plan at <?php print $yoursite ?>">
<input type="hidden" name="item_number" value="5YRADVANCED">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="return" value="<?php print $thankyou_url ?>">
<input type="hidden" name="cancel_return" value="<?php print $cancel_url ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-SubscriptionsBF">
<input type="hidden" name="a3" value="$<?php print $p3_5price ?>">
<input type="hidden" name="p3" value="5">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
</form>



</div></td></tr></table></div></td></tr>
  <tr>
    <td 
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; TEXT-DECORATION: none" 
    width="100%">&nbsp;</td></tr></table></h1>
<p align="center">

</body>



<?php
$xoopsOption['show_rblock'] = 1;
?>
<center>
<script type="text/javascript"><!--
google_ad_client = "pub-0695271925636940";
/* 336x280, created 7/6/08 */
google_ad_slot = "9229449300";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<center>
<p><b>Xoops Hosting Module Created by<a href="http://www.gethostedhere.com/"> GetHostedHere.com</a><p>
</center>
</center>
<p>
</p>
<?php
require XOOPS_ROOT_PATH . '/footer.php';
?>
