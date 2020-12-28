<style>
#box1 {
        position:absolute;
		width:200px;
		height:200px;
        top: 50px;
        left: 50px;
		border:15px groove fuchsia;background:#BA55D3;
		align-items: center;
		display: flex;
		justify-content: center;
    }

    #box2 {
        position:absolute;
		width:200px;
		height:200px;
border:15px ridge fuchsia;background:#BA55D3;
        top: 50px;
        right: 50px;
		align-items: center;
		display: flex;
		justify-content: center;

    }

    #box3 {
        position:absolute;
		width:200px;
		height:200px;
border:15px groove fuchsia;background:#B378D3;
        bottom: 50px;
        right: 50px;
		align-items: center;
		display: flex;
		justify-content: center;

    }

    #box4 {
        position:absolute;
        bottom: 50px;
        left: 50px;
		width:200px;
		height:200px;
border:15px outset fuchsia;background:#B378D3;
		align-items: center;
		display: flex;
		justify-content: center;

    }
	#boxcenter{
		position:absolute;
		width:200px;
		height:200px;

		left:40%;
		bottom:35%;
		border:15px inset fuchsia;background:#9932CC;
		align-items: center;
		display: flex;
		justify-content: center;

	}

button
{
	width:55%;
	height:25%;
	border:5px groove fuchsia;background:;
}
</style>


<body style='background:url("images/bgbw.jpg");' >
<div  id=box1 style=""><button id=btnhome style="transform: rotate(270deg);" onclick="window.location.href = 'index.php';">Home</button></div>	
<div  id=box2><button id=btnnews style="transform: rotate(270deg);" onclick="window.location.href = 'news.php';">News</button></div>	
<div  id=box3><button id=btncontact style="transform: rotate(270deg);" onclick="window.location.href = 'contact.php';">Contact</button></div>	
<div  id=box4><button id=btnabout style="transform: rotate(270deg);" onclick="window.location.href = 'about.php';">About</button></div>	
<div  id=boxcenter><button id=btnmain style="transform: rotate(270deg);" onclick="window.location.href = 'index.php';">Main</button></div>	
</body>



<script>
var buttons = document.getElementsByTagName("BUTTON");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
	buttons[i].onmouseover=function(e) {
		this.style.border="7.5px solid cyan";
		this.style.borderStyle = (this.style.borderStyle!=='groove' ? 'groove' : 'ridge'); 
	}

	buttons[i].onmouseleave=function(e) {
		this.style.border="7.5px groove fuchsia";
	}


}

</script>
