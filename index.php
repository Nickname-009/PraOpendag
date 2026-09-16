<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="hero">
        <div class="topbar">
            <div class="brand">
                <img src="images\curio-03-geel-logo-rgb.png" alt="curio" style="width:9em; height:3em;">
            </div>
 
            <div class="banner">
                Deze testversie van onze informatiesite is gemaakt door<br>
                <span class="name">Nick Rullens</span>, software developer<br>
                2e leerjaar
            </div>
        </div>
    </header>

    <section class="services">
        <h2><span class="Underlinedsimple">CU</span>RIO</h2>

        <div class="imaginary-grid">

            <div class="imaginary">
                <div class="image-container">
                    <img src="images/vakken.jpg" alt="blue">
                    <p>(click up here!)</p>
                    <button class="image-button" onclick="openPopup('blue')">
                        View
                    </button>
                </div>
                <div class="imaginary-text">
                    <p>Een paar van de vakken die je in je toekomst zou kunnen zien zijn web en pra, dus je zal veel kunnen leren over web pagines maken, en groteren projecten waar je veel zal van kunnen leren, daarbuiten zijn er ook nog normaleren vakken tussen, maar om daar meer over achter te kunnen komen kan je op het plaatje hier links drukken!</p>
                </div>
            </div>

            <div class="imaginary">
                <div class="image-container">
                    <img src="images/versnellen.jpg" alt="orange">
                    <p>(click up here!)</p>
                    <button class="image-button" onclick="openPopup('orange')">
                        View
                    </button>
                </div>
                <div class="imaginary-text">
                    <p>2.	Sneller weg zijn van school is wel iets wat iedereen zou willen, maar dat kan nu ook echt, als je genoeg je best er voor doet. En zelfs als het niet lukt om dat te berijken kan je nog wel minder lessen krijgen om zorgen over te maken in het algemeen, door examens te maken van de meer “bassis” vakken kan je ze maar snel uit je rooster halen zodat je lekker lamnger pauze kan nemen of eerder naar huis kan, druk op het plaatje voor meer info.</p>
                </div>
            </div>

            <div class="imaginary">
                <div class="image-container">
                    <img src="images/office.jpg" alt="pink">
                    <p>(click up here!)</p>
                    <button class="image-button" onclick="openPopup('pink')">
                        View
                    </button>
                </div>
                <div class="imaginary-text">
                    <p>3.	Rust en stilte zijn heel belangrijk om goed te kunnen leren voor de meeste mensen, vooral op een opleiding zoals deze waren denken over alles wat je gaat doen heel belangrijk is, dus de sfeer moet daar ergens ook wel bij kunnen passen, daarom hebben wij een net wat rustigeren sfeere om te behouden hier. Druk op het plaatje voor meer info.</p>
                </div>
            </div>

            <div class="imaginary">
                <div class="image-container">
                    <img src="images/groepen.jpg" alt="purple">
                    <p>(click up here!)</p>
                    <button class="image-button" onclick="openPopup('purple')">
                        View
                    </button>
                </div>
                <div class="imaginary-text">
                    <p>Samenwerken met anderen is ook iets wat je hier veel zal tegenkomen, vooral bij de grotere opdrachten waar je soms samen aan een project zal moeten werken. Hierdoor leer je niet alleen hoe je zelf dingen kan maken, maar ook hoe je goed met andere mensen kan overleggen en samen tot een goed eindresultaat kan komen. Druk op het plaatje voor meer info.</p>
                </div>
            </div>

            <div class="imaginary">
                <div class="image-container">
                    <img src="images/huiswerk.jpg" alt="red">
                    <p>(click up here!)</p>
                    <button class="image-button" onclick="openPopup('red')">
                        View
                    </button>
                </div>
                <div class="imaginary-text">
                    <p>Aan het begin van het jaar zal je natuurlijk ook gewoon opdrachten krijgen om te maken, zodat je alvast kan wennen aan de manier van werken hier. Dit kunnen kleinere opdrachten zijn voor verschillende vakken, maar soms ook wat grotere opdrachten waar je wat langer mee bezig bent. Zo leer je steeds meer over de vakken en hoe je de dingen die je leert kan gebruiken in je opdrachten. Druk op het plaatje voor meer info.</p>
                </div>
            </div>




            <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close" onclick="closePopup()">&times;</span>

                    <img id="popup-image" src="" alt="CURIO">
                    
                    <h2 id="popup-title"></h2>
                    <p id="popup-text"></p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <section class="contact" id="contact">
        <div class="form-area">
            <h2><span class="Underlinedsimple">CO</span>NTACT</h2>
            <form action="php/contactconfig.php" method="post">
                <label for="">FULL NAME</label>
                <input type="text" name="name">

                <label for="">EMAIL</label>
                <input type="email" name="email">

                <label for="">MESSAGE</label>
                <textarea name="area"></textarea>
                <div class="button">
                    <input type="submit" value="send" id="button">
                </div>
            </form>
        </div>

        <div class="contact-info">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, expedita. Nostrum necessitatibus sit nesciunt quidem deserunt, vitae sint. Dolores culpa laborum quae doloribus deserunt reprehenderit? Beatae nobis rerum ex deserunt?
            </p>

            <p class="address">
                Curio<br>
                terheidenseweg 350<br>
            </p>
        </div>
    </section> -->

    <script>

        function openPopup(image) {
            let popup = document.getElementById("popup");
            let popupImage = document.getElementById("popup-image");
            let popupTitle = document.getElementById("popup-title");
            let popupText = document.getElementById("popup-text");

            if (image === "blue") {
                popupImage.src = "images/blue.jpg";
                popupTitle.innerText = 
                popupTitle.innerText = "vakken";
                popupText.innerText = "Deze opleiding zal een paar andere vakken hebben als dat je gewend bent,veel daar van natuurlijk met programeren of het process daar van te maken, maar nogsteeds een paar oud en vertrouwde vakken zoals nederlands, engels en rekenen. Als je echt zin hebt om hier aan door te werken kan je al snel je examens er in nemen, en klaar zijn met het vak voor dat andere dat zijn, en dus niet meer naar de les te hoeven komen.";
            }

            if (image === "orange") {
                popupImage.src = "images/orange.jpg";
                popupTitle.innerText = "versnellen";
                popupText.innerText = "Heb jij nu al ervaring met programeren? Of kan je het van nature snel oppakken, dan is er de mogelijkheid om te versnellen, als je het goed genoeg doet in het eerste helft van het eerste jaar kan je een uitnodiging krijgen om aan de versnellings route mee te doen, hier krijg je een paar extra uuren in de week om aan andere projecten te werken, die andere pas in lateren jaren kunnen krijgen. Dit zal je opleiding 3 jaar inplaats van 4 laten duuren. En kan altijd gestopt worden.";
            }

            if (image === "pink") {
                popupImage.src = "images/orange.jpg";
                popupTitle.innerText = "sfeer";
                popupText.innerText = "Op CURIO proberen wij een “office” sfeer te behouden, dit kan mischien heel anders zijn dan wat je gewent zou zijn van het middlebaren, dit betekent natuurlijk niet dat je niet mag laggen of lol hebben, maar het is normaal om proberen stil te werken, en zo min mogelijk andere storen. Als een soort preperatie voor toekoemistge baanen te maken met coderen, of algemeene “office” type werk plekken.";
            }

            if (image === "purple") {
                popupImage.src = "images/orange.jpg";
                popupTitle.innerText = "teamwork";
                popupText.innerText = "Veel mensen gaan er van uit dat de opleiding software development een anti-sociale opleiding is vergeleken met veel anderen, maar je zal in realiteit heel veel met anderen mensen moeten samen wereken, dit betekent niet dat je niets zelf zal moeten gaan doen, maar het betekent wel dat je bij heel veel groteren projects soms wel weeken of maanden lang zou kunnen werken met de zelfde groepen. ";
            }

            if (image === "red") {
                popupImage.src = "images/orange.jpg";
                popupTitle.innerText = "huiswerk";
                popupText.innerText = "Vergeleken met het middelbare wordt je hier veel minder normaal huiswerk mee gegeven. Je kan nogsteeds soms wel huiswerk mee krijgen natuurlijk, maar dichtbij alle less stoff zal tijdens de les worden behandeld, en je wordt gewoon de tijd gegeven om die tijdens de lessen te maken, het kan daarintegen wel mischien zijn dat als je het niet optijd af hebt, of extra wilt weten, dat je er nog wel in je eigen tijd moet aan werken.";
            }

            popup.style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>

    <footer>
        <div class="mini-box">
            HOME | CURIO | CONTACT  
            <span>2026 ©</span>
        </div>
    </footer>

</body>
</html>