<?php

namespace XTAIN\Geo;

/**
 * @author Maximilian Ruta <mr@xtain.net>
 */
class Calculator
{
    /**
     * @param Point $place1
     * @param Point $place2
     *
     * @return Point
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function center(Point $place1, Point $place2)
    {
        return new Point(
            ($place1->getLatitude() + $place2->getLatitude()) / 2,
            ($place1->getLongitude() + $place2->getLongitude()) / 2
        );
    }

    /**
     * @param Point $place1
     * @param Point $place2
     *
     * @return Distance
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function distance(Point $place1, Point $place2) {
        $theta = $place1->getLongitude() - $place2->getLongitude();
        $dist = sin(deg2rad($place1->getLatitude())) *
                sin(deg2rad($place2->getLatitude())) +
                cos(deg2rad($place1->getLatitude())) *
                cos(deg2rad($place2->getLatitude())) *
                cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);

        return new Distance($dist);
    }
}