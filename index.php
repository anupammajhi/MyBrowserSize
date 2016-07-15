<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta property="og:image" content="http://labs.anupamm.com/img/favicon.png" />
    <meta http-equiv:"content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" /> 
    <meta name="description" content="What's My Browser Size is a simple but useful tool that tells you about the size of the browser in real time. " />
    <meta property="og:description" content="What's My Browser Size is a simple but useful tool that tells you about the size of the browser in real time." />
    <meta name="keywords" content="What,what's,my,browser,size,window,Anupam,Majhi,Anupam Majhi,portfolio,blog,india,web,developer,anupammajhi,anupamfx,volvo,designer,computer,science,engineer,server,resume,lab,experiment" />
    <meta name="author" content="Anupam Majhi" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>What's My Browser Size | Anupam Majhi | LAB &raquo; labs.AnupamM.com</title>
    <meta property="og:title" content="What's My Browser Size | Anupam Majhi | LAB &raquo; labs.AnupamM.com" />
    <!--



 __          __  _                            _         
 \ \        / / | |                          | |        
  \ \  /\  / /__| | ___ ___  _ __ ___   ___  | |_ ___   
   \ \/  \/ / _ \ |/ __/ _ \| '_ ` _ \ / _ \ | __/ _ \  
    \  /\  /  __/ | (_| (_) | | | | | |  __/ | || (_) | 
     \/  \/ \___|_|\___\___/|_| |_| |_|\___|  \__\___/  




 __    __ _           _   _                       ___                                   __ _         
/ / /\ \ \ |__   __ _| |_( )__    /\/\  _   _    / __\_ __ _____      _____  ___ _ __  / _(_)_______ 
\ \/  \/ / '_ \ / _` | __|/ __|  /    \| | | |  /__\// '__/ _ \ \ /\ / / __|/ _ \ '__| \ \| |_  / _ \
 \  /\  /| | | | (_| | |_ \__ \ / /\/\ \ |_| | / \/  \ | | (_) \ V  V /\__ \  __/ |    _\ \ |/ /  __/
  \/  \/ |_| |_|\__,_|\__||___/ \/    \/\__, | \_____/_|  \___/ \_/\_/ |___/\___|_|    \__/_/___\___|
                                        |___/                                                        

                                                                                             


  _  _   ___   _____   ___ _   _ _  _     _ 
 | || | /_\ \ / / __| | __| | | | \| |   | |
 | __ |/ _ \ V /| _|  | _|| |_| | .` |   |_|
 |_||_/_/ \_\_/ |___| |_|  \___/|_|\_|   (_)
                                            




-->

<script>
function CheckSize(){
	document.getElementById("b_width").innerHTML = Math.max(document.documentElement.clientWidth,window.innerWidth||0)+" px";
	document.getElementById("b_height").innerHTML = Math.max(document.documentElement.clientHeight,window.innerHeight||0)+" px";
}
</script>
</head>
<body onload="CheckSize()" onresize="CheckSize()">

<div id="container">
	<table>
	<tr><td>Width : </td><td><div id="b_width"></div></td></tr>
	<tr><td>Height : </td><td><div id="b_height"></div></td></tr>
	</table>
</div>
</body>
</html>