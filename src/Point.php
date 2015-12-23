<?php

namespace XTAIN\Geo;

/**
 * @author Maximilian Ruta <mr@xtain.net>
 */
class Point
{
    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * Place constructor.
     *
     * @param float $latitude
     * @param float $longitude
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}