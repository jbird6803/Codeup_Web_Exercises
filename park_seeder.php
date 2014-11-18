<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'np_user');

define('DB_PASS', 'password');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks = [
    ['name' => 'Arches',   'location' => 'Utah',  'date_established' => '1971-11-12', 'area_in_acres' => '75518.98'],
    ['name' => 'Badlands',   'location' => 'South Dakota',  'date_established' => '1978-11-10', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend', 'location' => 'Texas',  'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Carlsbad Caverns',   'location' => 'New Mexico',  'date_established' => '1930-05-14', 'area_in_acres' => '46766.45'],
    ['name' => 'Denali',   'location' => 'Alaska',  'date_established' => '1917-02-26', 'area_in_acres' => '4740911.72'],
    ['name' => 'Everglades', 'location' => 'Florida',  'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90'],
    ['name' => 'Grand Canyon',   'location' => 'Arizona',  'date_established' => '1919-02-26', 'area_in_acres' => '1217403.32'],
    ['name' => 'Joshua Tree',   'location' => 'California',  'date_established' => '1994-10-31', 'area_in_acres' => '789745.47'],
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    			VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}