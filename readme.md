💶 Kalkulator Këmbimi Valutor (Euro → Lek)

Ky projekt është një aplikacion i thjeshtë në PHP dhe HTML që konverton shumën në Euro në Lekë shqiptare, bazuar në kursin e këmbimit të dhënë nga përdoruesi.

🚀 Karakteristikat

🧮 Llogarit automatikisht shumën në Lekë në bazë të kursit të futur.

⚙️ Kontrollon nëse janë futur vlera pozitive.

🖥️ Dizajn modern me gradient background dhe formë responsive.

💡 Shfaq rezultatin direkt në të njëjtën faqe pa rifreskim të jashtëm.

🗂️ Struktura e Projektit
kembimi/
│
├── index.php       # Faqja kryesore me formularin dhe logjikën PHP
├── README.md       # Ky dokument udhëzues

⚙️ Kërkesat

XAMPP ose WAMP i instaluar

PHP 7.4+ (ose version më i ri)

Një shfletues modern (Chrome, Edge, Firefox, etj.)

🧾 Si ta ekzekutosh

Hap XAMPP Control Panel dhe shtyp Start në shërbimin Apache.

Kopjo dosjen e projektit kembimi në këtë rrugë:

C:\xampp\htdocs\kembimi


Hap shfletuesin dhe shkruaj:

http://localhost/kembimi/index.php


Vendos shumën në Euro dhe kursin e këmbimit, pastaj kliko Afisho.
Do të shfaqet rezultati si më poshtë:

Shuma e dhënë: 10.00 €
Kursi i këmbimit: 101.50 Lek/€
Shuma në Lekë: 1,015.00 Lekë

🧠 Si funksionon

Forma HTML merr inputet euro dhe kursi.

Kur shtypet “Afisho”, të dhënat dërgohen me metodën POST në të njëjtin skedar (index.php).

PHP kontrollon vlerat dhe llogarit shumën:

$lek = $euro * $kursi;


Rezultati shfaqet direkt nën formular, pa ndonjë faqe të dytë.

🧰 Teknologjitë e përdorura

HTML5

CSS3 (stile inline)

PHP 8.x

🔒 Kontroll i gabimeve

Nëse përdoruesi fut një vlerë zero ose negative, shfaqet mesazhi:

“Ju lutem vendosni vlera pozitive për shumën dhe kursin.”

🧑‍💻 Autori

Mentori
📅 Projekti përditësuar: Tetor 2025
💬 Për çdo pyetje ose përmirësim, mund të shtosh komente në kod ose README.