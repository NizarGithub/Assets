<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
function minify_html($string) {
    $string = minify_js($string);
    // Remove html comments
    $string = preg_replace('/<!--(?!\[if|\<\!\[endif)(.|\s)*?-->/', '', $string);
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
    $buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r\n","\r","\t","\n",'   ','    ','     '), '', $buffer);
    /* remove other spaces before/after ) */
    $buffer = preg_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
    return $buffer;
}
