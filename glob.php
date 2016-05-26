<?php
/**
 * Created by PhpStorm.
 * User: elborn
 * Date: 20/05/2016
 * Time: 11:15 PM
 */


$file=glob('img/*.{jpeg,jpg,png,txt}',GLOB_BRACE);
print_r($file);