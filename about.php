<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<?php include "cwmainmenu.php"; ?>

<br>
<body background="images/bg1.jpeg"  >
<label id=divarrow>About</label>

<br><br>
<div style="color:white;background:#6B3B85;width:auto;height:auto;background:url('images/contact1.jpg');"
>ABC is a global leader in providing solution for web and mobile development. We have often been asked what is ABC means, well we would like to keep the puzzle unsolved, till we sit together to have a cup of coffee. We ensure our clients with great levels of certainty and satisfaction of their projects. </div>
</body>	

<br>

<div id="outPutContainer" style="color:red;width:auto;height:auto;background:url('images/contact.jpg');"></div>
   <div id="contentDiv" style="color:red;display:none;">This is some cool content...
   This is some cool content...
   This is some cool content...
   This is some cool content...
   This is some cool content...
   This is some cool content...
   </div>


<?php include "cwmainmenufooter.php"; ?>
<script>
					
 document.getElementById("a3").className="";
 document.getElementById("a4").className="active";
 document.getElementById("a1").className="";
 document.getElementById("a2").className="";
 document.getElementById("a5").className="";
 
					

 document.getElementById("fa3").className="";
 document.getElementById("fa4").className="active";
 document.getElementById("fa1").className="";
 document.getElementById("fa2").className="";
 document.getElementById("fa5").className="";

					
					
function printSentence(inner, outer, index, speed) {
    var input = document.getElementById(inner).innerHTML;
    var timer = setInterval(function(){
       document.getElementById(outer).innerHTML+=input.charAt(index);
       index++;
        if(index  == sentence.length -1){
            printResume(inner, outer, index+1, speed);
        }else{
           clearInterval(timer);
        }
    }, speed);
}

printSentence("contentDiv", "outPutContainer", 0, 100);
</script>					
					
