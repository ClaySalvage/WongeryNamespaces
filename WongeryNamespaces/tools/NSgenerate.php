<?php

// I used this file to build the namespace field of the extension.json file
// rather than writing it all out by hand.

// Initially I was going to omit this directory from the repository
// (I'd had it listed in .gitignore) but then I decided eh,
// what's the harm in including it.

$mainspaces = ["Game", "Build", "Asset", "Source", "Works", "Map"];
$subspaceConstants = [
    "RPG",
    "CCG",
    "WAR",
    "BOARD",
    "CARD",
    "DICE",
    "LEGO",
    "ORIGAMI",
    "PAPER",
    "BUILD3D",
    "PIXEL",
    "ASSET3D",
    "EABA",
    "ZERO",
    "SAVAGE",
    "BRP",
    "5E",
    "PATH",
    "STRIKE",
    "GURPS"
];
$subspaceNames = [
    "Game:RPG",
    "Game:CCG",
    "Game:War",
    "Game:Board",
    "Game:Card",
    "Game:Dice",
    "Build:LEGO",
    "Build:Origami",
    "Build:Paper",
    "Build:3d",
    "Asset:Pixel",
    "Asset:3d",
    "Game:RPG:EABA",
    "Game:RPG:Zero",
    "Game:RPG:Savage",
    "Game:RPG:BPR",
    "Game:RPG:5e",
    "Game:RPG:Path",
    "Game:CCG:Strike",
    "Game:RPG:GURPS"
];

$id = 5020;
foreach ($mainspaces as $space) {
    echo "{\n";
    echo '"id": ' . $id++ . ",\n";
    echo '"constant": "NS_' . strtoupper($space) . '"' . ",\n";
    echo '"name": "' . $space . '"' . ",\n";
    echo '"protection": "extra-edit"' . "\n";
    echo "},\n{\n";
    echo '"id": ' . $id++ . ",\n";
    echo '"constant": "NS_' . strtoupper($space) . '_TALK"' . ",\n";
    echo '"name": "' . $space . '_talk"' . "\n";
    echo "},\n";
}
unset($space);
$id = 5200;
foreach ($subspaceNames as $key => $space) {
    echo "{\n";
    echo '"id": ' . $id++ . ",\n";
    echo '"constant": "NS_' . $subspaceConstants[$key] . '"' . ",\n";
    echo '"name": "' . str_replace(":", "_", $space) . '"' . ",\n";
    echo '"protection": "extra-edit"' . "\n";
    echo "},\n{\n";
    echo '"id": ' . $id++ . ",\n";
    echo '"constant": "NS_' . $subspaceConstants[$key] . '_TALK"' . ",\n";
    echo '"name": "' . str_replace(":", "_", $space) . '_talk"' . "\n";
    echo "},\n";
}
