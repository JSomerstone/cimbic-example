<?php
include 'JSomerstone/Cimbic/cimbicAutoloader.php';

define('SITE_PATH_PREFIX', 'somerkivi.net');

$contentManager = new JSomerstone\Cimbic\ContentManager(
        dirname(__DIR__),
        'somerkivi.net'
);

$contentManager->execute();