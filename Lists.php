<!Doctype HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cab-share</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="listStyle.css"/>
</head>
<body id="body">
<img src="manhattan.jpg" alt="background" class="images">
<button class="b1" onclick="document.getElementById('1').style.display='block';document.getElementById('body').style.opacity=1;document.getElementById('3').style.display='block';">Seek travelers</button>
<div class="modal1" id="1">
<form method="POST" action="find.php">
<input type="text" placeholder="To...." required class="destination" name="des"/>
<input type="text" placeholder="From.." required class="source" name="source"/>
<input type="date" placeholder="Date(29-08-17).." required class="date" name="datess"/>
<input type="submit" value="Submit" class="sub1" /*onclick="window.location.href='find.php';"*//>
</form>
<button class="c1" onclick="document.getElementById('1').style.display='none';document.getElementById('body').style.opacity=1;document.getElementById('3').style.display='none';">Cancel</button>
</div>
<button class="b2" onclick="document.getElementById('2').style.display='block';document.getElementById('body').style.opacity=1">Add your journey</button>
<div class="modal2" id="2">
<form method="POST" action="add.php">
<input type="text" placeholder="To...." required class="adestination" name="ades"/>
<input type="text" placeholder="From.." required class="asource" name="asource"/>
<input type="text" placeholder="Your name." required class="name" name="aname"/>
<input type="number" placeholder="Mob.no.." required class="mobno" name="amobno" max='9999999999' min='1000000000'/>
<input type="date" placeholder="Date(29-08-17).." required class="adate"name="dates" maxlength="8"/>
<input type="submit" value="Submit" class="sub2" /*onclick="window.location.href='add.php';"*//>
</form>
<button class="c2" onclick="document.getElementById('2').style.display='none';document.getElementById('body').style.opacity=1;">Cancel</button>
</div>
<!--<button class="b3">Phone numbers of cab and auto drivers</button>-->
<ul>
<li ><button class="buts1" onclick="document.getElementById('5').style.display='block';document.getElementById('6').style.display='none';">About</button></li>
<li ><button class="buts2" onclick="document.getElementById('6').style.display='block';document.getElementById('5').style.display='none';">Developer</button></li>
</ul>
<p class="about" id='5'>
Lorem ipsum dolor sit amet, consecteteur. Ad varius eu, fames condimentum elit nibh dolor lacus litora ad. Nisi. Cubilia integer penatibus erat nec. Egestas mi rutrum a, adipiscing dis, vestibulum in, nisl. Auctor. Risus nulla suspendisse. Vel hendrerit semper placerat dignissim ad mattis ad ligula per, semper vel adipiscing vestibulum. Curabitur eget sit dictum sagittis. Etiam arcu nostra, felis sodales. Aliquet ac, ac pede molestie hendrerit dictumst taciti suscipit sapien auctor lorem iaculis. Erat eget nunc. Tristique, tortor magna ullamcorper amet tristique nulla, id vulputate. Massa nisl vitae sapien quis, gravida blandit hymenaeos pharetra porta euismod dictumst turpis. Felis nisi et. Pretium purus erat odio dui. Ad sollicitudin varius, risus cras proin, lacinia lectus, fames, vitae. Consectetuer parturient erat ligula neque scelerisque dis, erat auctor conubia. Lobortis tristique placerat semper vestibulum interdum gravida sollicitudin cursus id volutpat. Quam a felis lacinia molestie ligula, congue ante, dictum.

</p>
<p class="developer" id='6'>
My name is Aniruddha Banerjea.I am a student pursuing Chemical engineering in Bits-Pilani,Pilani Campus.
</p>
</div>
</body>
</html>