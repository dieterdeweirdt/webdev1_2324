<?php

$content = file_get_contents('http://data.stad.gent/explore/dataset/real-time-bezettingen-fietsenstallingen-gent/download/?format=json&timezone=Europe/Brussels&lang=en');

$json = json_decode($content);

foreach($json as $item) {
    echo '<br>' . $item->fields->facilityname . ': ' . $item->fields->freeplaces;
  }
  