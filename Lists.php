<!Doctype HTML>
<html>
<head>
	<title>Cab-share</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="listStyle.css"/>
</head>
<body id="body">
<div class="div1">
	<h1 class="welcome">Welcome</h1>
</div>
<div class="div2">
<h3 class="description">
	Ever thought of sharing a cab to a nearby location but simply letting go of the idea for not getting people willing to share a cab with you.This website has been designed only to make this process easy and accessible to all.Forget the long hassle of spamming What's app groups.
</h3>
</div>
<button class="b1" onclick="document.getElementById('1').style.display='block';document.getElementById('body').style.opacity=0.6;">Seek travelers</button>
<div class="modal1" id="1">
<form method="POST" action="find.php">
<input type="text" placeholder="To...." required class="destination"/>
<input type="text" placeholder="From.." required class="source"/>
<input type="date" placeholder="Date(29-08-17).." required class="date"/>
<input type="submit" value="Submit" class="sub1" onclick="window.location.href='find.php';"/>
</form>
<button class="c1" onclick="document.getElementById('1').style.display='none';document.getElementById('body').style.opacity=1;">Cancel</button>
</div>
<button class="b2" onclick="document.getElementById('2').style.display='block';document.getElementById('body').style.opacity=0.6">Add your journey</button>
<div class="modal2" id="2">
<form method="POST" action="add.php">
<input type="text" placeholder="To...." required class="adestination" name="ades"/>
<input type="text" placeholder="From.." required class="asource" name="asource"/>
<input type="text" placeholder="Your name." required class="name" name="aname"/>
<input type="number" placeholder="Mob.no.." required class="mobno" name="amobno"/>
<input type="date" placeholder="Date(29-08-17).." required class="adate"name="dates"/>
<input type="submit" value="Submit" class="sub2" onclick="window.location.href='add.php';"/>
</form>
<button class="c2" onclick="document.getElementById('2').style.display='none';document.getElementById('body').style.opacity=1;">Cancel</button>

</div>
<!--<button class="b3">Phone numbers of cab and auto drivers</button>-->
</body>
</html>