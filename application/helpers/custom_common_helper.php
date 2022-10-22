<?php

function get_lang_key($key)
{
    $CI =& get_instance();
    $current_lang = $CI->session->userdata('current_lang');
    $CI->lang->load('content', $current_lang);
    return $CI->lang->line($key,FALSE);
}

function make_link($key)
{
    $CI =& get_instance();
    $current_lang_code = $CI->session->userdata('current_lang_code');
    if($current_lang_code=='ar'){
        return site_url('ar/'.$key);
    }else{
        return site_url('en/'.$key);
    }    
}
function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}

