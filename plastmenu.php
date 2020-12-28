<style>

#slides1{
    position: relative;
    //height: 50px;
    padding: 0px;
    margin: 0px;
    list-style-type: none;
	top:250px;
}
.slide1{
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 1;
	color:cyan;
	//border:1px solid red;
}
.showing{
    opacity: 1;
    //z-index: 2;
}



.ribbon {
  border:       20px solid fuchsia;        /* All borders set */
  border-left:  30px solid white;         /* Remove left border */
  border-right: 30px solid white; /* Right transparent */
  width:        125px;                  /* Increase element Width */
  background-color:fuchsia;
  text-align:center;  
  float:left;
  box-shadow:1px 2px 55px fuchsia;
}


</style>


<body background="images/foam1.jpg"  >
<br>
<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b1  style="border:5px groove red;box-shadow:1px 2px 55px red;"
>Main</button>
</div>


<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b2 style="border:5px groove red;box-shadow:1px 2px 55px red;" >Home</button>
</div>

<div class="ribbon" onclick="window.location.href = 'news.php';">
<button id=b3 style="border:5px groove red;box-shadow:1px 2px 55px red;">News</button>
</div>

<div class="ribbon" onclick="window.location.href = 'contact.php';">
<button id=b4 style="border:5px groove red;box-shadow:1px 2px 55px red;">Contact</button>
</div>


<div class="ribbon" onclick="window.location.href = 'about.php';">
<button id=b5 style="border:5px groove red;box-shadow:1px 2px 55px red;">About</button>
</div>

<div class="ribbon" onclick="window.location.href = 'timeline.php';">
<button id=b6 style="border:5px groove red;box-shadow:1px 2px 55px red;">Timeline</button>
</div>

<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b7 style="border:5px groove red;box-shadow:1px 2px 55px red;">Main</button>
</div>




<div id="slides1" style="text-align:center;background:fuchsia;width:1300;height:300;border:3px solid red;box-shadow:1px 2px 55px fuchsia;">
    <div class="slide1   showing" style=background:url("images/bg1.jpeg")>Compacc 1</div>
    <div class="slide1" style=background:url("images/bgbricksgray.jpg")>Compacc 2</div>
    <div class="slide1" style=background:url("images/bgbw.jpg")>Compacc 3</div>
    <div class="slide1" style=background:url("images/bgnote.jpg")>Compacc 4</div>
    <div class="slide1" style=background:url("images/bgstones.jpg")>Compacc 5</div>
	
	<div class="slide1" style=background:url("images/colorsplastic.jpg")>Compacc 6</div>
    <div class="slide1" style=background:url("images/foam.jpg")>Compacc 7</div>
    <div class="slide1" style=background:url("images/foam1.jpg")>Compacc 8</div>
    <div class="slide1" style=background:url("images/greenplastic.jpg")>Compacc 9</div>
	<div class="slide1" style=background:url("images/lightgreenplastic.jpg")>Compacc 10</div>
    <div class="slide1" style=background:url("images/orangeballs.jpg")>Compacc 11</div>
    <div class="slide1" style=background:url("images/purpleplastic.jpg")>Compacc 12</div>
    <div class="slide1" style=background:url("images/rosegranule.jpg")>Compacc 13</div>
	<div class="slide1" style=background:url("images/roseplastic.jpg")>Compacc 14</div>

	<div class="slide1" style=background:url("images/roseplastic1.jpg")>Compacc 15</div>
    <div class="slide1" style=background:url("images/roseplastic2.jpg")>Compacc 16</div>
    <div class="slide1" style=background:url("images/whiteplastic.jpg")>Compacc 17</div>
    <div class="slide1">contact<br><br><img src="images/contact.jpg" width=1200 height=200 ></div>
    <div class="slide1">contact1<br><br><img src="images/contact1.jpg" width=1200 height=200 ></div>
	<div class="slide1">contact2<br><br><img src="images/contact2.jpeg" width=1200 height=200 ></div>

</div>

</body>


<script>
var buttons = document.getElementsByTagName("BUTTON"); //var buttons = document.getElementsByTagName("INPUT");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
	
    //buttons[i].onclick = function(e) {

//if (this.id=="b2") alert('About');
//alert(e.target.id);    
    //alert(this.id);
		//alert(i);
		//var j=0;
		//j=2;
		//alert(buttons[j].id);
		
    //};

	buttons[i].onmouseover=function(e) {
		this.style.border="5px solid cyan";
		this.style.borderStyle = (this.style.borderStyle!=='groove' ? 'groove' : 'ridge'); 
	}

	buttons[i].onmouseleave=function(e) {
		this.style.border="5px groove red";
	}


}

</script>


<script>
var slides1 = document.querySelectorAll('#slides1 .slide1');
var currentSlide1 = 0;
var slideInterval1 = setInterval(nextSlide1,2000);


function nextSlide1(){
    slides1[currentSlide1].className = 'slide1';
	//alert(currentSlide1);
    currentSlide1 = (currentSlide1+1)%slides1.length;
	//alert(currentSlide1);
	slides1[currentSlide1].className = 'slide1 showing';
}
</script>	

