<?php require("menu.php"); ?>
<main class="main">
    <h1 id="darkboxed">Manual YouTube Description Generator (YTdesctags)</h1>
    <br>
    <p style="text-align: center;" id="darkboxed"; id="pagetop">Manual YouTube Description Generator (YTdesctags)<br>
        <image src="images/ytdesctags01.png"></image>
    </p>
    <p id="darkboxed">
        <br>
        YTdesctags is a small python app I made for my own use in managing my YouTube channel. It is console only and its purpose <br>
        was to support my own endeavours on YouTube in managing my content and making it less time consuming to upload and decorate.<br>
        <br>
        The intent of the program was to ask a series of questions based on the content of the video and spit out a text blob with<br>
        the description info based on the questions and video tags based on the inputted data. Thus the questions were rigid and<br>
        in a very specific use case for my purposes.<br>
        <br>
        I thought id put it here anyway, since it's a simple example of my python usage.
    </p>
    <p style="text-align: center;" id="darkboxed">Data input and usage<br>
        <image src="images/ytdesctags03.png"></image>
    </p>
    <p id="darkboxed">
        Since the program was intended to be used as fast as possible, some data, which may not exist, is skipped with enter.<br>
        The program also capitalises and formats some of the data so that the user can do as less keystrokes as possible.<br>
        Due to the basic nature of it, I didn't even compile it as an excecutable, but just ran it in the editors built in terminal<br>
        <br>
        The type of data, or more precisely, the type of video this program was meant to generate info for, is a simple gameplay<br>
        video. The program differentiates between 4 games being played in the video (TF2, Paladins, Realm Royale and Rogue Company).<br>
        It also differentiates if the match being played is ranked, casual, gamemode etc. per game. as well as asks info about the<br>
        skin that the player has on at the time, who are in their team, and in ranked case - also ranked data, rank up points, etc<br>
        The point of this was to generate a description and tags with as much detail as possible to play into the YouTube content<br>
        algorithm meanwhile minimising actual user input or time spent on generating these per video basis.<br>
        <br>
        The program enabled me to do daily uploads for almost 2 years.<br>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">Source Code<br>
        <image src="images/ytdesctags02.png"></image>
    </p>
    <p id="darkboxed">
        There isn't a whole lot to say more about the app, so here is the link to the source. Since this is a personal project, a<br>
        github repo hasn't existed prior to the creation of this portfolio, so there is no git repo history available other than<br>
        the commit for this<br>
        <br>
        <a href="https://github.com/Estlib/YTdesctags">Get Source</a><br><br>
        <a href="#pagetop">Back to top</a>
    </p>
</main>
</div>
<?php //require("foot.php"); ?>
</body>
</html>