<?php

namespace XTAIN\Geo;

/**
 * @author Maximilian Ruta <mr@xtain.net>
 */
class Distance
{
    /**
     * @var float
     */
    protected $distance;

    /**
     * Distance constructor.
     *
     * @param float $distance In geographic degrees
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function __construct($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @param float $kilometers
     *
     * @return Distance
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function createFromKilometers($kilometers)
    {
        return new Distance(Converter::kilometersToGeographicDegrees($kilometers));
    }

    /**
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getInGeographicDegrees()
    {
        return $this->distance;
    }

    /**
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getInGeographicMinutes()
    {
        return Converter::geographicDegreesToGeographicMinutes($this->distance);
    }

    /**
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public function getInKilometers()
    {
        return Converter::geographicDegreesToKilometers($this->distance);
    }
}