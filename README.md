# FabLab - urađene izmjene u kodu

**ENA: Branch Home-redesign**
**htmly\.htaccess** - Ispravljen problem neučitavanja resursa pri lokalnom pokretanju web stranice. Zahtjevi za resursima su se slali na lokaciju www/slike/..., zaobilazeći /fablab unutar /www. Ovim kodom je omogućeno da se zahtjevi šalju na pravu lokaciju, www/fablab/slike/...

**pages\en\indexContent.php** - zamijenjen logo

***slike\*** - dodan novi logo u folder (nekoliko različitih slika)

***slike\frontpg\*** - dodane editovane slike

**pages\en\indexNav.php** - zamijenjen logo, promijenjen gradient pozadine

**pages\en\indexFooter.php** - promijenjan boja pozadine, postavljene editovane slike loga firmi

***slike\sponzori\*** - dodane editovane slike 

**styles\drugi.css** - promijenjen scroll behavior, boja GitHub ikonice pri hover, background nava i boja i border radius prilikom hover na stavke nava

**styles\lander.css** - dodane nove klase za content na početnoj stranici

**styles\w3.css** - izmijenjene boje

Skoro identično je urađeno i za pages\bhs, s tim da je tekst na slikama kao i na navu na bosanskom jeziku.

**pages\en\indexContent.php**, **pages\bhs\indexContent.php** - izbrisan prethodni content layout

Urađen je merge brancha task-5 u Home-redesign, pa se sada u Home-redesign može vidjeti i urađeni pop-up.

**pages\en\banner.php** - prebačen id sa child elementa na parent element, da bi se pop-up pravilno zatvorio klikom na X.

**styles\lander.css** - opacity contenta na početnoj stranici je postavljen na 1, jer u drugom slučaju pravi konflikt sa pop-upom; dodan glow contenta na početnoj stranici pri hover

