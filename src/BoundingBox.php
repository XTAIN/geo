<?php

namespace XTAIN\Geo;

/**
 * @author Maximilian Ruta <mr@xtain.net>
 */
class BoundingBox
{
    /**
     * @var Point
     */
    protected $sw;

    /**
     * @var Point
     */
    protected $ne;

    /**
     * BoundingBox constructor.
     * @param Point $sw
     * @param Point $ne
     */
    public function __construct(Point $sw, Point $ne)
    {
        $this->sw = $sw;
        $this->ne = $ne;
    }

    /**
     * @param Point    $center
     * @param Distance $distance
     *
     * @return BoundingBox
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function createFromCenterAndDistance(Point $center, Distance $distance)
    {
        $distanceInDegrees = $distance->getInGeographicDegrees() / 2;

        $sw = new Point($center->getLatitude() - $distanceInDegrees, $center->getLongitude() - $distanceInDegrees);
        $ne = new Point($center->getLatitude() + $distanceInDegrees, $center->getLongitude() + $distanceInDegrees);

        return new BoundingBox($sw, $ne);
    }

    /**
     * @return Distance
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getDistance()
    {
        return Calculator::distance($this->sw, $this->ne);
    }

    /**
     * @return Point
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getSW()
    {
        return $this->sw;
    }

    /**
     * @return Point
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getSouthWest()
    {
        return $this->getSW();
    }

    /**
     * @return Point
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getNE()
    {
        return $this->ne;
    }

    /**
     * @return Point
     *
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getNorthEast()
    {
        return $this->getNE();
    }
}