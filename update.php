<?php
/**
 * Created by PhpStorm.
 * Company: sitehosting.com.br
 * User: marciocamello@outlook.com
 * Date: 30/07/2015
 * Time: 14:13
 */

use GitWrapper\GitWrapper;

require_once 'vendor/autoload.php';

if(isset($_GET['command'])) {

    $command = $_GET['command'];

    $wrapper = new GitWrapper();
    $wrapper->setTimeout(3600);

    echo $wrapper->git('fetch -t -u');
}