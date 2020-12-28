<style>
.scroll{
   width: 75px;
   height: 35px;
 }
 .scroll select{
 }

select {
}
option {
    display:table-cell;
}


/* width */
::-webkit-scrollbar {
  //width: 5px;
  height:10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px fuchsia; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  //background: cyan; 
}








.frame{
  width: 210px;
  height: 0px;
  margin: 0 auto;
  margin-top: 10px;
  margin-left:10px;
  position: relative;
  cursor: pointer;
  //background: red;
}

.frame1{
  width: 210px;
  height: 0px;
  margin: 0 auto;
  margin-top: 10px;
  margin-left:1100px;
  position: relative;
  cursor: pointer;
  //background: red;
}

.frame2{
  width: 210px;
  height: 0px;
  margin: 0 auto;
  margin-top: 200px;
  margin-left:10px;
  position: relative;
  cursor: pointer;
  //background: red;
}


.frame3{
  width: 210px;
  height: 0px;
  margin: 0 auto;
  margin-top: 0px;
  margin-left:1100px;
  position: relative;
  cursor: pointer;
  //background: red;
}

.framecenter{
  width: 210px;
  height: 0px;
  margin: 0 auto;
  margin-top: 150px;
  margin-left:550px;
  position: relative;
  cursor: pointer;
  //background: red;
}



.hex-outer{
  background: cyan;
  width: 210px;
  height: 120px;
  border:1px solid red;
}

.hex-inner{
  background: fuchsia;
  width: 200px;
  height: 115px;
  position: relative;
  left: 5px;
  top: 82px !important;
  border-radius: 0;
  transition: all .4s;
  -webkit-transition: all .4s;
}

.h1{
  position: absolute;
  top: 80px;
}

.h2{
  position: absolute;
  top: 80px;
  transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
}

.h3{
  position: absolute;
  top: 80px;
  transform: rotate(-60deg);
  -webkit-transform: rotate(-60deg);
}

.button {
       position:relative;
       margin-top:50%;
	   margin-left:30%;
	   height:70px;
	   width:85px;
	   border:15px groove cyan;
    }

</style>

<marquee  style="position:fixed;z-index:15;cursor:pointer;border:5px groove cyan;top:320px;transform: rotate(270deg);box-shadow:1px 2px 55px red;width:550px;height:20px;background:fuchsia;" >Hexagon</marquee>

<body style='background:url("images/orangeballs.jpg");' >

<div class="frame">
    <div class="hex-outer h1"></div>
    <div class="hex-outer h2"></div>
    <div class="hex-outer h3"></div>
    <div class="hex-inner h1" ></div>
    <div class="hex-inner h2" ></div>
    <div class="hex-inner h3" ></div>
	<button id=b1 class="button" >Home</button>
</div>

<div class="frame1">
    <div class="hex-outer h1"></div>
    <div class="hex-outer h2"></div>
    <div class="hex-outer h3"></div>
    <div class="hex-inner h1"></div>
    <div class="hex-inner h2"></div>
    <div class="hex-inner h3"></div>
	<button id=b2 class="button">News</button>
</div>


<div class="framecenter">
    <div class="hex-outer h1"></div>
    <div class="hex-outer h2"></div>
    <div class="hex-outer h3"></div>
    <div class="hex-inner h1" ></div>
    <div class="hex-inner h2" ></div>
    <div class="hex-inner h3" ></div>
	<button id=b3 class="button">Main</button>
</div>



<div class="frame2">
    <div class="hex-outer h1"></div>
    <div class="hex-outer h2"></div>
    <div class="hex-outer h3"></div>
    <div class="hex-inner h1" ></div>
    <div class="hex-inner h2" ></div>
    <div class="hex-inner h3" ></div>
	<button id=b4 class="button">About</button>
</div>

<div class="frame3">
    <div class="hex-outer h1"></div>
    <div class="hex-outer h2"></div>
    <div class="hex-outer h3"></div>
    <div class="hex-inner h1"></div>
    <div class="hex-inner h2"></div>
    <div class="hex-inner h3"></div>
	<button id=b5 class="button">Contact</button>
</div>

<select id=selid class=scroll size=5  style="top:90px;
  left:900px;
  position: fixed;
border:5px groove cyan;overflow-y:hidden;overflow-x:auto;">
    <option value="home" ondblclick="window.location.href = 'index.php';" >Home</option>
    <option value="news" ondblclick="window.location.href = 'news.php';">News</option>
    <option value="main" ondblclick="window.location.href = 'index.php';">Main</option>
    <option value="about" ondblclick="window.location.href = 'about.php';" >About</option>
	<option value="contact" ondblclick="window.location.href = 'contact.php';">Contact</option>
</select> 


</body>

<script>
var input = document.getElementById("selid");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   //alert('123');
   var x = document.getElementById("selid").value;
	if (x=="home") window.location.href = 'index.php';
	if (x=="news") window.location.href = 'news.php';
	if (x=="main") window.location.href = 'index.php';
	if (x=="about") window.location.href = 'about.php';
	if (x=="contact") window.location.href = 'contact.php';
   }
});






var buttons = document.getElementsByTagName("BUTTON");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
	buttons[i].onmouseover=function(e) {
		this.style.border="7.5px groove red";
		//this.style.borderStyle = (this.style.borderStyle!=='groove' ? 'groove' : 'ridge'); 
	}

	buttons[i].onmouseleave=function(e) {
		this.style.border="";
	}
buttons[i].onclick=function(e) {
	x=e.target.id;
	if (x=="b1") window.location.href = 'index.php';
	if (x=="b2") window.location.href = 'news.php';
	if (x=="b3") window.location.href = 'index.php';
	if (x=="b4") window.location.href = 'about.php';
	if (x=="b5") window.location.href = 'contact.php';
	}
}
</script>



<script>

</script>