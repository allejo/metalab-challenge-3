<?php

$csv_file ="data.csv";
$headers  = array('id', 'first-name', 'last-name', 'persona', 'sex');
$csv_data = array_map('str_getcsv', file($csv_file));

array_walk($csv_data, function (&$e) use ($headers) {
    $e = array_combine($headers, $e);
});

foreach ($_GET as $filter => $value)
{
    if (!in_array($filter, $headers)) { continue; }

    $regexSearch = (substr($value, 0, 1) === '/' && substr($value, -1, 1) === '/');

    foreach ($csv_data as $id => $element)
    {
        if (($regexSearch && !preg_match($value, $element[$filter])) || (!$regexSearch && $element[$filter] != $value))
        {
            unset($csv_data[$id]);
        }
    }
}

$results = array(
    "status" => "200",
    "success" => "true",
    "version" => "JSON-Flat-File-0.1",
    "hero" => array_values($csv_data)
);

echo json_encode($results);