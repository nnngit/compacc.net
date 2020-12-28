<style>
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


<body background="images/colorsplastic.jpg"  >
<br>
<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b1 style="border:15px groove red;box-shadow:1px 2px 55px red;">Main</button>
</div>


<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b2 style="border:15px groove red;box-shadow:1px 2px 55px red;">Home</button>
</div>

<div class="ribbon" onclick="window.location.href = 'news.php';">
<button id=b3 style="border:15px groove red;box-shadow:1px 2px 55px red;">News</button>
</div>

<div class="ribbon" onclick="window.location.href = 'contact.php';">
<button id=b4 style="border:15px groove red;box-shadow:1px 2px 55px red;">Contact</button>
</div>


<div class="ribbon" onclick="window.location.href = 'about.php';">
<button id=b5 style="border:15px groove red;box-shadow:1px 2px 55px red;">About</button>
</div>

<div class="ribbon" onclick="window.location.href = 'timeline.php';">
<button id=b6 style="border:15px groove red;box-shadow:1px 2px 55px red;">Timeline</button>
</div>

<div class="ribbon" onclick="window.location.href = 'index.php';">
<button id=b7 style="border:15px groove red;box-shadow:1px 2px 55px red;">Main</button>
</div>

</body>


<script>
var buttons = document.getElementsByTagName("BUTTON");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
	
    buttons[i].onclick = function(e) {
    };

	buttons[i].onmouseover=function(e) {
		this.style.border="15px solid cyan";
		this.style.borderStyle = (this.style.borderStyle!=='groove' ? 'groove' : 'ridge'); 
	}

	buttons[i].onmouseleave=function(e) {
		this.style.border="15px groove red";
	}


}
</script>


