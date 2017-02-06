<?php
//fungsi multiple select yang telah terpilih
function multipleSelected($x, $y) {
	$p = explode(",",$x);
	foreach($p as $page){
		if($y==$page)
		return 'selected';	
	}
}

//fungsi multiple select yang baru akan dipilih
function multipleSelect($x) {
	if($x) {
		$no = 1; $text = null;
		foreach ($x as $t){
			if($no==1)
				$t = "$t";
			else
				$t = ",$t";
			$text .= $t;
			$no++;
		}
		return $text;
	}
}
function minify_html($string)
{
    $string = minify_js($string);
    // Remove html comments
    //$string = preg_replace('/<!--(?!\[if|\<\!\[endif)(.|\s)*?-->/', '', $string);
    // Remove tab
    $string = preg_replace('/\t+/', '', $string);
	// Remove new line
    $string = preg_replace('/\n+/', '', $string);   
    $string = preg_replace('/>\r+/', '>', $string);   
    $string = preg_replace('/\r+</', '<', $string);   

    // Remove space between tags. Skip the following if
    // you want as it will also remove the space 
    // between <span>Hello</span> <span>World</span>.
    $string = preg_replace('/>\s+</', '><', $string);   

	return $string;
}

function minify_js($buffer){ 
	/* remove comments */
	//$buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $buffer);
	/* remove tabs, spaces, newlines, etc. */
	$buffer = str_replace(array("\r\n","\r","\t","\n",'   ','    ','     '), '', $buffer);
	/* remove other spaces before/after ) */
	$buffer = preg_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
	return $buffer;
}
function auto_number($tabel, $kolom, $lebar=0, $awalan='') {
    $query          = "SELECT $kolom FROM $tabel ORDER BY $kolom DESC LIMIT 1";
    $hasil          = mysql_query($query);
    $jumlahrecord   = mysql_num_rows($hasil);
    if($jumlahrecord == 0) {
        $nomor = 1;
    }
    else {
        $row    = mysql_fetch_array($hasil);
        $nomor  = intval(substr($row[0],strlen($awalan)))+1;
    }
    if($lebar>0) {
        $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
    }
    else {
        $angka = $awalan.$nomor;
    }

    return  $angka;
}
