<?php
declare(strict_types=1);

$cfg['blowfish_secret'] = 'gtresa21schoolQWEdsaEFDWrqeerERE'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/** Servers configuration */
$i = 0;

/** First server */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mysql-svc';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

/** phpMyAdmin configuration storage settings */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['PmaAbsoluteUri'] = 'http://192.168.99.101:5000';