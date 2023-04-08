<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$movie = array(
    array(
        "id" => 1,
        "movieTitle" => "Spiderman No Way Home",
        "topCast" => "Tom Holland, Mj, Doctor Strange" ,
        "director" => "Jon Watts",
        "writers" => "Erik Sommers, Chris McKenna, Stan Lee",
        "releaseDate" => "December 17. 2021."
      
    ),
    array(
        "id" => 2,
        "movieTitle" => "Five Feet Apart",
        "topCast" => "Will, Poe, Barb" ,
        "director" => "Justin Baldoni",
        "writers" => "Mikki Daughtry, Tobias laconis",
        "releaseDate" => "December 17. 2021."
    ),
    array(
        "id" => 3,
        "movieTitle" => "Transformers",
        "topCast" => "Mikaela Banes, Captain Lennox, USAF Tech Sergeant Epps" ,
        "director" => "Michael Bay",
        "writers" => "Roberto Orci, Alex Kurtzman, John Rogers",
        "releaseDate" => "December 17. 2021."
    ),
    array(
        "id" => 4,
        "movieTitle" => "The Conjuring",
        "topCast" => "Ted Warren, Lorraine Warren,Roger Perron" ,
        "director" => "James Wan",
        "writers" => "Chad Hayes, Carey Hayes",
        "releaseDate" => "December 17. 2021."
    ),
    array(
        "id" => 5,
        "movieTitle" => "How to Train Your Dragon",
        "topCast" => "Hiccup, Stoick, Fishlegs" ,
        "director" => "Dean DeBlois, Chris Sanders",
       "writers" => "Hayes Davies, Dean DeBlois, Chris Sanders",
        "releaseDate" => "December 17. 2021."
    )
);

echo json_encode($movie);
?>