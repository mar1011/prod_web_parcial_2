<?php
//ARRAY DEL NAVBAR
$nav = [];
    $nav[]=["ruta" => "index.php?page=0", "nombre" => "Inicio" ];
    $nav[]=["ruta" => "index.php?page=1", "nombre" => "Merch" ];
    $nav[]=["ruta" =>  "index.php?page=2", "nombre" => "Galería" ];
    $nav[]=["ruta" => "index.php?page=3", "nombre" => "Contacto" ];

$nav_panel = [];  
   $nav_panel[]=["ruta" => "index.php?seccion=0", "nombre" => "Lista de Merch"];   
    $nav_panel[]=["ruta" => "index.php?seccion=1", "nombre" => "Lista de Fotos"]; 
    $nav_panel[]=["ruta" => "index.php?seccion=2", "nombre" => "Cargar Merch"];
    $nav_panel[]=["ruta" => "index.php?seccion=3", "nombre" => "Cargar Foto"];
    $nav_panel[]=["ruta" => "../index.php", "nombre" => "Inicio"];

//ARRAY DEL FOOTER
$footer = [];
$footer[]=["href" => "https://www.facebook.com/Angryzeta/?ref=br_rs", "target" => "_blank", "img" => "img/facebook.png" , "alt" => "Facebook", "width" => "30", "title" => "Facebook" ];
$footer[]=["href" => "https://www.instagram.com/angryzeta/?hl=es-la", "target" => "_blank", "img" => "img/instagram.png", "alt" => "Instagram", "width" => "30",  "title" => "Instagram"];
$footer[]=["href" => "https://www.youtube.com/channel/UCR0ZRXzz17RypJV6oPtPthA", "target" => "_blank", "img" => "img/youtube.png", "alt" => "Youtube" ,"width" => "30", "title" =>"Youtube" ];
$footer[]=["href" => "https://open.spotify.com/artist/4UqeMTEuXMvaTaJV8iIE9V", "target" => "_blank", "img" => "img/spotify.png", "alt" => "Spotify"  ,"width" => "30", "title" => "Spotify" ];

//ARRAY DE LA GALERÍA
/*$galeria  = [];
    $galeria[] =["imagen" => "img/1.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/2.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/3.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/4.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/5.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/6.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/7.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/8.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/9.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/10.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/11.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/12.jpg", "alt" => "Angry Zeta"];
    $galeria[] =["imagen" => "img/13.jpg", "alt" => "Angry Zeta"];

//ARRAY DEL MERCH

$merch =[];
   $merch[] = ["merch" => "img/cd1.jpg",  "descrip" => "CD Angry Zeta & The Hillbullys" ];
   $merch[] = ["merch" => "img/re1.jpg",  "descrip" => "Remera Angry Zeta & The Hillbullys" ];
   $merch[] = ["merch" => "img/cd 2.jpg", "descrip" => "CD Angry Zeta & The Hillbullys" ];
   $merch[] = ["merch" => "img/pin.jpg",  "descrip" => "Pin Angry Zeta & The Hillbullys" ];
   $merch[] = ["merch" => "img/re2.jpg",  "descrip" => "Remera Angry Zeta & The Hillbullys" ];
   $merch[] = ["merch" => "img/parche.jpg", "descrip" => "Parche Angry Zeta & The Hillbullys" ];
*/
//ARRAY CHECKBOK
$opcion=[];
$opcion=["op1" => "Gira"];
$opcion=["op2" => "Fechas"];
$opcion=["op3" => "Merch"];
$opcion=["op4" => "Newsletter"];
