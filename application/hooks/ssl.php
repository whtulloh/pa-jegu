<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function check_ssl()
{
    $CI =& get_instance();
    $class = $CI->router->fetch_class();
 
    $ssl = array('checkout', 'member', 'mimin');
    $partial =  array('login','register');
 
    if(in_array($class,$ssl))
    {
        force_ssl();
    }
    else if(in_array($class,$partial))
    {
        return;
    }
    else
    {
        unforce_ssl();
    }
}
 
function force_ssl()
{
    $CI =& get_instance();
    $CI->config->config['base_url'] = str_replace('http://', 'https://', $CI->config->config['base_url']);
    if ($_SERVER['SERVER_PORT'] != 443) redirect($CI->uri->uri_string());
}
 
function unforce_ssl()
{
    $CI =& get_instance();
    $CI->config->config['base_url'] = str_replace('https://', 'http://', $CI->config->config['base_url']);
    if ($_SERVER['SERVER_PORT'] == 443) redirect($CI->uri->uri_string());
}

/* End of ssl.php */