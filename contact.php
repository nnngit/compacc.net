<?php include "cwmainmenu.php"; ?>

<style> 
#div1css {
  //box-sizing: content-box;  
  width: 370px;
  height: 370px;
  //padding: 30px;  
  border: 5px solid brown;
  //overflow:scroll;
  background:white;
}


#contactcss {
  //box-sizing: content-box;  
  position:absolute;
  background:white;
  margin-left:400px;
  width: 370px;
  height: 370px;
  //padding: 30px;  
  border: 5px solid brown;
  //overflow:scroll;
}

</style>

<br>
<body background="images/contact1.jpg" >
<label style="color:#6B3B85;margin-left:10px;font-weight:bold;box-shadow: 5px 5px 10px #666;">Contact</label>

<hr>

<div>
<label><b>Follow</b></label>
<a href="http://twitter.com"><img src="images/twitter.png" alt="" width=50 height=50 border="1"  /></a>
<a href="http://fb.com"><img src="images/facebook.png" alt=""  width=50 height=50 border="1" /></a>
<a href="http://gmail.com"><img src="images/email.png" alt=""  width=50 height=50 border="1" /></a>
</div>
<hr>

<div id="contactcss" style="text-align:center;background:url('images/bgnote.jpg');">
      <!--<pre>--><b>
	  <br>
	  <div style="float:right">Contact</div>
	  <br><hr>
  	  <div>No.12,pushpanjali garden,</div>
	  <div>Ezhil Nagar,</div>
	  <div>Iyer Bungalow,</div>
	  <div>Madurai,</div>  
	  <div>Tamil Nadu 625014</div> 
	  <hr>
  	  <div style="float:right">Other Details</div>
	  <br>
	  <hr>
	  </b>
	  <!--</pre>-->
</div>

<div id="div1css" style="background:url('images/bgstones.jpg');">                         
<h4>Contact Form</h4>
<hr>
                                    
<form id="contactForm" name="contactForm"  method="post" action="">
      <div><b>Name</b><br>
      <input type="text"  id="cname" name="cname"  required="required" placeholder="Name"/>                  
	  </div>
      <div><b>Email Id</b><br>
	  <input type="email"  id="cmail" name="cmail" required="required" placeholder="Email Id" />
      </div>
      <div><b>Message</b></br>
      <textarea  placeholder="Message" name="ctextarea" id="ctextarea" cols="49" rows="10"></textarea>
      </div>
	  <br>
      <button type="submit" id="csubmit"  name="submit" ><i></i> Send feedback</button><br>
</form>
</div>                 
<!--<tr>
<td align="left"><span class="bottomlinks-11">Follow us :</span> <img src="social-networking.png" alt="" width="57" height="16" border="0" usemap="#Map2" style="padding-top : 5px;" onmouseover=fn1(event) /></td>
</tr>


<!--source frame get from maps.google.com search settings iframe-->
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6343633248975!2d78.13417621479391!3d9.964347792875603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c7ab0c9b0dcd%3A0x7b7c53df363977fb!2sMYB%20Software!5e0!3m2!1sen!2sin!4v1580267093605!5m2!1sen!2sin" width="1330" height="400" frameborder="1" style="border:1;" allowfullscreen=""></iframe>

</body>

<?php include "cwmainmenufooter.php"; ?>

<script>
 document.getElementById("a3").className="active";
 document.getElementById("a1").className="";
 document.getElementById("a2").className="";
 document.getElementById("a4").className="";


 document.getElementById("fa3").className="active";
 document.getElementById("fa1").className="";
 document.getElementById("fa2").className="";
 document.getElementById("fa4").className="";


function fn1(event)
{
//alert(a=event.pageX);
if (a==142) window.location.href="twitter.com";
if (a==161) window.location.href="fb.com";
if (a>=171 && a<=189) window.location.href="http://linkedin.com";
}
document.getElementById("cname").focus();
</script>
