<?php

require 'vendor/autoload.php';

use XTAIN\Geo\BoundingBox;
use XTAIN\Geo\Calculator;
use XTAIN\Geo\Point;
use XTAIN\Geo\Distance;

$point1 = new Point(52.520007, 13.404954); // berlin
// $point2 = new Point(2, 3);

$boundingBox = BoundingBox::createFromCenterAndDistance(
    // Calculator::center($point1, $point2),
    $point1,
    Distance::createFromKilometers(100)
);

var_dump($boundingBox->getDistance()->getInKilometers());

