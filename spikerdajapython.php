<?php require("menu.php"); ?>
<main class="main">
    <h1 id="darkboxed">Spikerdaja</h1>
    <br>
    <p style="text-align: center;" id="darkboxed"; id="pagetop">Spikerdaja (Python Game)<br>
        <image src="images/spikerdaja01.png"></image>
    </p>
    <p id="darkboxed">
        <br>
        Spikerdaja is a game programmed in python for a class assignment. The game is based on a flash game of similiar concept<br>
        wherein the player needs to cheat off a specific student, all the while trying to avoid the teachers gaze.<br>
        The idea of the original flash game was simple enough to where i thought the concept was doable with what we had <br>
        learned in python at the time, but due to personal issues and no git management at the time, the game remains in an<br>
        incomplete state.<br><br>
        The game was programmed as a paired assignment with Eva-Kristina Vesiallik.
        <br><br>
        Current features present:
        <br>
        <ul>
            <li>Graphics</li>
            <li>Story</li>
            <li>Levels</li>
            <li>Collision Detection</li>
            <li>Player Control</li>
            <li>Target Entity</li>
            <li>Moving Enemy Entity (more or less complete)</li>
            <li>Saving Game</li>
            <li>Loading Game</li>
        </ul><br><br>
    </p>
    <p id="darkboxed">
        Features short of completion:
        <br>
        <ul>
            <li>Child entity from Moving enemy entity for teachers sight</li>
            <li>Resizable Window</li>
            <li>Engine Overhaul</li>
            <li>Music Implementation</li>
            <li>SFX</li>
            <li>Improved Control Scheme and automation of some of the controls.</li>
            <li>Level Editor</li>
        </ul><br><br>
    </p>
    <p style="text-align: center;" id="darkboxed">Engine<br>
        <image src="images/thonny.png"></image>
    </p>
    <p id="darkboxed">
        The engine is pretty primitive from an OOP pov as it doesn't really follow any modern programming custom at all. Infact<br>
        the way that the processing of the entire game works right now is in an intentional cycle, much like the games on game<br>
        console systems from the 80s and 90s. There is one main loop which checks/detects and adjusts everything in a cycle,<br>
        once a cycle is complete, the image is then "rendered" into the window. The style of programming for the game was<br>
        chosen as such because this was the only style either of us were familiar with for programming a game, in terms of<br>
        what the code does, not how it looks.<br>
        <br>
        Now there arises a question immediately - "What about Renpy?". Renpy was not chosen because we decided to stick with<br>
        the tools that we learned in class in favour of learning a new thing which was not covered in the class. This was purely<br>
        done to get the game done in an acceptable state which fulfilled the assignment requirements in a "timely" manner.<br>
        We were a few weeks late to submit it despite this decision.<br><br>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">Gameplay and Idea<br>
        <image src="images/theclassroom.png"></image>
    </p>
    <p id="darkboxed">
        The idea for even making a game about cheating came about when discussing different ideas for games we could do since the<br>
        final assigment for this subject was open and only had to comply with a list of parameters, we decided to go with a game.<br>
        Originally, there was also a platformer idea to do, but we decided to do this instead, due to the simplified number of<br>
        objects vs a platformer game. The biggest part of that being the physics required in a platformer game. A top down<br>
        stealth game was just a better fit for this assignment overall. The levels don't scroll, there is no gravity, a level<br>
        far fever objects to handle of which most behave very similarily. They were The collision objects, player, a target, a hazard <br>
        and a moving hazard.<br>
        <br>
        The choice as to what type of stealth game we wanted to make came down to two options: a shoplifting<br>
        game, or a cheating game. I proposed the cheating idea, as it had the potential for a more compelling story.<br>
        So the 5 things that the teacher game ended up needing were: collision, player, nerd, teacher and teachers line of sight.
        Even though we never got to the last one of those, most of these things we were able to accomplish regardless.<br>
        <br>
        When it came to the specifics of the game, I knew about a flash game that was perfect fit for this from years ago. <br>
        It was called "The Classroom" and work began on building it in python.
        <br><br>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">Challenges<br>
        (image depicting a struggle)
    </p>
    <p id="darkboxed">
        The challenges for this project came mostly from ourselves, not the assignment itself. We didn't use github or any other<br>
        sort of project management tool either, so most of the programming was done either in an alternating fashion, or manually<br>
        merging the codes by hand using copypasting. We just weren't used to github at that point yet. Although that was not the<br>
        only challenge present. This was also our first collaborative effort too, so we also had to learn how to account with<br>
        eachothers programming styles and abilities. Thankfully, both of these problems have improved alot on later projects.<br>
        <br><br>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">The Story<br>
        (image from story)
    </p>
    <p id="darkboxed">
        The Story for the game was written to be similiar to the source, but also taking from my own experiences and ideas.<br>
        The main character is a kid struggling with grades, who, after approaching a nerd, befriends them. They then agree to<br>
        help fix their grades. There are illustrative pieces of text between every level and after winning. There were also <br>
        intended to be cutscene art aswell accompanying the text. The teachers themselves were also intended to be a bigger <br>
        part of the story, each with their own personalities and behaviours, some of which being hinted to the player in the<br>
        story just before the level or via other means.<br>
        <br><br>
        For the sake of completeness, here is the complete story (in Estonian) as it is in the game:<br>
    <p style="text-align: center;" id="darkboxed">
        Esimene kontrolltöö. Nohik ütles et aitab mind, kuigi ma teda väga ei usu. Istun klassis ta kõrvale, <br>
        vaatan kas peab oma sõnast kinni. Kui ei pea, siis... siis on nii minu, kui tema lips läbi.<br>
        </p>
    <p style="text-align: center;" id="darkboxed">
        Teine kontrolltöö. Olen oma hinnetega nii kraavis, et ühest spikerdamisest ei piisa. Ta lubas ka <br>
        edaspidigi aidata, ainult et õpetaja on haisu ninna saanud. Ta ei lase mul enam koos nohikuga <br>
        istuda, paneb minu alati kuskile mujale istuma. :C<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Kolmas kontrolltöö - Spikerduskunst. Meid on pandud algklassi kunstiklassi. Tundub et õpetajale see <br>
        väga ei istu, käib ringi ja pidevalt jälgib nagu kull. Nohik on õpetaja eriti põletava pilgu all, isegi <br>
        maaler ei vahi värvi kuivamist pingsamalt.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Neljas kontrolltöö - Kommari punker. Tundub et tund liigutati õpetaja Pavlovitsi klassi - vanale kommarile<br>
        meeldib punane värv üle kõige, seega värvis ta üks aasta oma klassi üleni punaseks. Õpetajat on selles <br>
        klassis halb näha kuna tallegi meeldib punane ent mitte ümbruses, vaid seljas kanda.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Viies kontrolltöö - Tagasi algklassi. Nohik, truu sõber, aitab alati, kuid täna on meil asendusõpetaja, <br>
        spikerdajate hirm ise: Stallone. See pole ta päris nimi, ta tõmbas üks aasta kooli lõpuballil korralikult <br>
        nina täis ja hakkas karated keset saali viskama - nii saigi nime Stallone.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Kuues kontrolltöö - Härmatunud digivõlur. Täna annab kontrolltööd üks habemik keda tuntakse koolipeal <br>
        mitme nimega. Könndalf, kaabelhabe... levinuim neist on digivõlur. Kuna tema tunnis peaaegu mitte keegi <br>
        läbi ei kuku. Tundub et ta spikerdamistest ei tea sest seekord olen nohikule üsna lähedal.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Seitsmes kontrolltöö - Taevas või põrgu? Kes kurat selle klassi kallale kommari lasi? taevasinine põrand <br>
        ja kärtspunased lauad ei sobi kokku, valus on midagi muud peale töö vaadatagi. Vähemalt nohikule on<br>
        juurdepääs suhteliselt vaba.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Kaheksas kontrolltöö - Lan party. Oleme tagasi arvutiklassis, halb on see et meile annab tunde jälle <br>
        meie tavaline õpetaja, kullipilk on naasnud ja asendusõpetajate käe all lihtsalt spikerdamine on läbi. <br>
        Vähemalt nüüd oleme kogenumad, ning mulle tundub, et kooliaasta lõppeb positiivselt.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Üheksas kontrolltöö - Kommar strikes back. Keegi elutark (vist kommar ise) otsustas et üks arvutiklassidest <br>
        ka kommari meele järgi kärtspunaseks värvida. Mida see meile tähendab, et ma pean jälle rohkem vahtima <br>
        et vahele ei jääks. Nohik vast nõustub minuga siinkohal.<br>
    </p>
    <p style="text-align: center;" id="darkboxed">
        Lõpueksam - Vastused nutitahvlil. Ainult mina ja nohik pääsesime eelmise kontrolltöö tuumapommist.<br>
        Uskumatu. Poleks arvanud, et õpetaja nii laastava töö teeb. Aga samas siin ongi viimane töö.<br>
        Nohik mind seekord ei aita. tundub, et tegu on lõksuga...<br>
    </p>
        <br><br>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">Levels & Graphics<br>
        (image depicting a struggle)
    </p>
    <p id="darkboxed">
        To keep the project somewhat manageable, the graphics system was built to be "modular". in multiple ways.
        <br><br>
        Firstly, there is a number of colors in the game that count as system-wide pallette, everything uses those colors. <br>
        There were intended to be some functions that can change the system-wide palette, but the game never developed <br>
        far enough to take use of this specific function. These system colors are passed as variables to the various methods<br>
        drawing and generating the graphics.
        <br><br>
        Secondly, the room design of the game accepts colors as arguments methods, so that one layout can be used multiple <br>
        times, simply by passing a different set of colors to it. These functions were also what the level editor was intended <br>
        to take advantage of.<br>
        <br>
        There ended up being 10 levels in total, with them being variations of just 3 layouts. A note about the layouts here:<br>
        the doors also change from room to room even if the table layout is the same because instead of using a key press to<br>
        check for completion, you would instead just touch the door to end the level. The layouts were also changed per-level<br>
        for the student positions aswell, because your position in the class changed from level to level.<br>
        <br>
    </p>
    <p id="darkboxed">
        Heres all the levels in the game:
        <table id="darkboxed">
            <tr>
                <td><image src="images/spikerdaja02.png"></image></td>
                <td>Level 1, The starting classroom.<br>Traditional paired up classroom layout type.</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja03.png"></image></td>
                <td>Level 2, The second classroom.<br>Computer classroom layout type.</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja04.png"></image></td>
                <td>Level 3, The first-grader art classroom.<br>Grouped classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja05.png"></image></td>
                <td>Level 4, Teacher Pavlovits classroom.<br>Traditional paired up classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja06.png"></image></td>
                <td>Level 5, A different 1-4th graders art classroom.<br>Grouped classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja07.png"></image></td>
                <td>Level 6, The same classroom as level 2.<br>Computer classroom layout type.</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja08.png"></image></td>
                <td>Level 7, The weird art room with blue floor and red desks.<br>Grouped classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja09.png"></image></td>
                <td>Level 8, Different computer class with LAN capabilities<br>Computer classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja10.png"></image></td>
                <td>Level 9, A newly redecorated computer class.<br>Computer classroom layout type</td>
            <tr>
            </tr>
                <td><image src="images/spikerdaja11.png"></image></td>
                <td>Level 10, The starting classroom again as a callback.<br>Traditional paired up classroom layout type.</td>
            </tr>
        </table>
        <a href="#pagetop">Back to top</a>
    </p>
    <p style="text-align: center;" id="darkboxed">The Code, Build, Versions, Source, Credits and Downloads<br>
        <image src="images/spikerdaja12.png"></image>
    </p>
    <p id="darkboxed">
        Programming it was quite a task, as I had to find a way to generate everything necessary in an effective manner. The
        While I have talked roughly how the code works above, seeing it for yourself is ultimately the best and thus, <br>
        the code for all of the versions throughout the development process is available in the github repo below:<br>
        <a href="https://github.com/Estlib/Spikerdaja">Get source</a><br>
        Do note that this repository was made after the fact and doesnt contain any actual git development history<br><br>
        A built excecutable is available here:<br>
        <a href="https://github.com/Estlib/Spikerdaja/tree/master/output">Get excecutable</a><br>
        Note that you also need the tthk.ppm file along with the .exe in the same folder. Download both files.<br><br>

        Credits:<br>
        programmed by: Jüri Vaitmaa & Eva-Kristina Vesiallik
        Overseen by: Kristjan Kivikangur
        <br><br>
        <a href="#pagetop">Back to top</a>
    </p>
</main>
</div>
<?php //require("foot.php"); ?>
</body>
</html>