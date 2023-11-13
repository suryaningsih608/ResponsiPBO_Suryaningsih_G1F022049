<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("suryani", "riau");

// tambahkan value nama di object
$alzah->nama = "suryani";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Sobat");

// buat object dari kelas person
$fariski = new Person("ningsih", "bengkulu");

// tambahkan value nama di object
$fariski->nama = "ningsih";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
