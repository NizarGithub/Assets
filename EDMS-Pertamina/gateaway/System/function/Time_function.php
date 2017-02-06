<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
date_default_timezone_set('Asia/jakarta');
function time_since($original) {
  $chunks = array(
      array(60 * 60 * 24 * 365, 'tahun'),
      array(60 * 60 * 24 * 30, 'bulan'),
      array(60 * 60 * 24 * 7, 'minggu'),
      array(60 * 60 * 24, 'hari'),
      array(60 * 60, 'jam'),
      array(60, 'menit'),
  );

  $today = time();
  $since = $today - $original;

  if ($since > 604800)
  {
    $print = date("M jS", $original);
    if ($since > 31536000)
    {
      $print .= ", " . date("Y", $original);
    }
    return $print;
  }

  for ($i = 0, $j = count($chunks); $i < $j; $i++)
  {
    $seconds = $chunks[$i][0];
    $name = $chunks[$i][1];

    if (($count = floor($since / $seconds)) != 0)
      break;
  }

  $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
  return $print . ' yang lalu';
}

function timeAgo($timestamp){
    $time = time() - $timestamp;

    if ($time < 60) {
        return ( $time > 1 ) ? $time . ' detik yang lalu' : ' 1 detik yang lalu';
    }
    elseif ($time < 3600) {
        $tmp = floor($time / 60);
        return ($tmp > 1) ? $tmp . ' menit yang lalu' : ' 1 menit yang lalu';
    }
    elseif ($time < 86400) {
        $tmp = floor($time / 3600);
        return ($tmp > 1) ? $tmp . ' jam yang lalu' : ' 1 jam yang lalu';
    }
    elseif ($time < 2592000) {
        $tmp = floor($time / 86400);
        return ($tmp > 1) ? $tmp . ' hari yang lalu' : ' 1 hari yang lalu';
    }
    elseif ($time < 946080000) {
        $tmp = floor($time / 2592000);
        return ($tmp > 1) ? $tmp . ' bulan yang lalu' : ' 1 bulan yang lalu';
    }
    else {
        $tmp = floor($time / 946080000);
        return ($tmp > 1) ? $tmp . ' tahun yang lalu' : ' 1 tahun yang lalu';
    }
}
?>
