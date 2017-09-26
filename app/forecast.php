<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/40.1792,-44.4991/?exclude=minutely?exclude=hourly';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

  //feels like
  $temp= $forecast['currently']['temperature'];

  if($temp< 50){
  	$feels = 'It\'s Cold outside';
  } else {
  	$feels = 'It\'s nice outside';
  }