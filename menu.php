<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style type="text/css">        
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css);
    @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300);
    /* @import url(https://drive.google.com/open?id=15fG_BjjAU1TeFh0_7ZI13VZQTR-JsV7C); */
    @font-face {
            font-family: 'Serpentine-Light';
            src: url('fonts/Serpentine-Light.otf')
            /* src: url(https://drive.google.com/open?id=15fG_BjjAU1TeFh0_7ZI13VZQTR-JsV7C) format(opentype); */
        }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Serpentine-Light';
        color: white;
        text-shadow:
        -1px -1px 0 #000,  
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;
        background-image: url('images/general/space.jpg');
    }
    .container {
        width: 100%;
        height: 100%;
    }
    nav {
        position: fixed;
        display: flex;
        align-items: flex-start;
        width: 20%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.308); /* has color for the area which is not accordion menu but also is not main page area */
    }
    main {
        position: fixed;
        right: 0;
        width: 80%;
        height: 100%;
        /*background-image: url('images/general/space.jpg');
        /*background-color: rgb(166, 255, 0); /* has color for the main page area which is not the accordion menu empty area */
        overflow: auto;
        padding: 40px;
    }
    h1 {
        font-weight: bold;
        margin-bottom: 50px;
        font-size: 55px;
        text-align: center;
    }
    p {
        margin-bottom: 20px;
        line-height: 26px;
        font-size: 20px; /**/
    }
/*     p::first-letter {
        font-size: 200%;
        font-weight: bold;
    } */
    li, ul label.title, ul, a {
        width: 100%;
        color: rgb(255, 255, 255); /* text color of menu items, not submenu items*/
        font-family: 'Serpentine-Light';
        display: block;
        font-weight: normal;
    }
    ul label {
        height: 35px; /* height of section title */
    }
    ul li{
        height: 35px; /* height of listed elements*/
        overflow: hidden;
        transition: all .3s;
    }
    li {
        display: block;
        background-color: #ffffff44; /* submenu item color*/
    }
    label.title {
        border: 2px solid white;
        border-left: 4px solid white;
        border-right: 4px solid white;
        font-size: 22px;
        background: linear-gradient(rgba(0, 22, 0, 0.438), rgba(0, 54, 0, 0.438)); /*menu item gradient colors*/
        padding: 4px 15px;
        cursor: pointer;
    transition: all .25s;
    }
    a{
        font-size: 12px;
        text-shadow: 1px #000;
        text-decoration: none;
        color: rgb(255, 255, 255); /* submenu item text color */
        display: block;
        padding: 10px 25px;
        transition: all .25s;
    }
    a:hover {
        background-color: rgba(1, 32, 0, 0.308); /* submenu item rollover main color */
    box-shadow: inset 5px 0px 0px 0px rgb(0, 129, 32); /* submenu item animated bar color */
    }
    label:hover {
        text-shadow: 0px 0px 10px #000; /* text outer glow color of main menu item */
    }
    input[type="radio"] {
        display: none;
    }
    #edit:checked + li, #archive:checked + li, #tools:checked + li, #preferences:checked + li {
        height: 179px;
    }
    #estlib:checked + li {
        height: 140px; /* combined height of the section title and clickable links or additional lists - 3 in list +1 title*/
    }
    #youtube:checked + li{
        height: 210px; /* combined height of the section title and clickable links or additional lists - 5 in list +1 title*/
    }
    #ocmusic:checked + li, #covermusic:checked + li, #tf2maps:checked + li, #collecting:checked + li, {
        height: 175px; /* combined height of the section title and clickable links or additional lists - 4 in list +1 title*/
    }
    #woodworking:checked + li, #bakery:checked + li, #gaming:checked + li, #programming:checked + li, #computing:checked + li,#Jüri:checked + li{
        height: 105px; /* combined height of the section title and clickable links or additional lists - 2 in list +1 title*/
    }
    #TARge21:checked + li, #Studies:checked + li{
        height: 70px; /* combined height of the section title and clickable links or additional lists - 1 in list +1 title*/
    }
    #Languages:checked + li{
        height: 245px; /* combined height of the section title and clickable links or additional lists - 6 in list +1 title*/
    }
    #Projects:checked + li{
        height: 280px; /* combined height of the section title and clickable links or additional lists - 7 in list +1 title*/
    }
    i {
        margin-right: 12px;
    }
    #darkboxed {
        margin: 15px 15px 15px 15px;
        border: 4px 4px 4px 4px white;
        background-color: rgba(0, 0, 0, 0.500);
    }
    @media screen and (max-width: 600px){
        nav {
            width: 100%;
            position: relative;
        }
        main {
            width: 100%;
            position: relative;
        }
    }
    </style>
</head>
<body>
    <div class="container">
		<nav class="menu">
			<ul>
				<input type="radio" name="menu" id="Jüri" checked>
				<li>
					<label for="Jüri" class="title">Jüri Vaitmaa</label>
					<a href="kes.php">Who am I</a>
					<a href="mis.php">What is this</a>
				</li>
				<input type="radio" name="menu" id="Languages">
				<li>
					<label for="Languages" class="title">Programming Languages</label>
					<a href="python.php">Python</a>
					<a href="csharp.php">C#</a>
					<a href="mssql.php">Microsoft SQL</a>
                    <a href="javascript.php">Javascript</a>
                    <a href="cplusplus.php">C++</a>
                    <a href="excelvba.php">Excel VBA</a>
				</li>
				<input type="radio" name="menu" id="Projects">
				<li>
					<label for="Projects" class="title">Projects</label>
					<a href="shopMVC.php">MVC Shop project</a>
					<a href="thissite.php">PortFolio Site</a>
					<a href="spikerdajapython.php">Spikerdaja</a>
					<a href="YTdesctags.php">Manual YouTube Description Generator</a>
					<a href="gachaponMVC.php">Gachapon Machine API</a>
					<a href="HHTRW.php">HHTRW (N/A)</a>
                    <a href="eelarve.php">Monthly Budget Planner</a>
				</li>
                <input type="radio" name="menu" id="Studies">
				<li>
					<label for="Studies" class="title">Studies</label>
					<a href="teachercourseAreng.php">Õpetaja Arengumapp</a>
				</li>
				<input type="radio" name="menu" id="TARge21">
				<li>
					<label for="TARge21" class="title">TARge21</label>
					<a href="targe21/targe21.html">TARge21</a>
				</li>
            </ul>
		</nav>