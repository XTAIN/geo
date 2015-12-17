<?php

namespace XTAIN\Geo;

/**
 * @author Maximilian Ruta <mr@xtain.net>
 */
class Converter
{
    const GEOGRAPHIC_DEGREES_IN_GEOGRAPHIC_MINUTES = 60;

    const KILOMETER_IN_GEOGRAPHIC_MINUTES = 1.853159616;

    const KILOMETER_IN_GEOGRAPHIC_DEGREES = 0.0089982311916;

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function geographicDegreesToGeographicMinutes($dist)
    {
        return $dist * self::GEOGRAPHIC_DEGREES_IN_GEOGRAPHIC_MINUTES;
    }

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function geographicMinutesToGeographicDegrees($dist)
    {
        return $dist / self::GEOGRAPHIC_DEGREES_IN_GEOGRAPHIC_MINUTES;
    }

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function kilometersToGeographicDegrees($dist)
    {
        return $dist * self::KILOMETER_IN_GEOGRAPHIC_DEGREES;
    }

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function geographicDegreesToKilometers($dist)
    {
        return $dist / self::KILOMETER_IN_GEOGRAPHIC_DEGREES;
    }

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function kilometersToGeographicMinutes($dist)
    {
        return self::geographicDegreesToGeographicMinutes(self::kilometersToGeographicDegrees($dist));
    }

    /**
     * @param float $dist
     *
     * @return float
     * @author Maximilian Ruta <mr@xtain.net>
     */
    public static function geographicMinutesToKilometers($dist)
    {
        return self::geographicDegreesToKilometers(self::geographicMinutesToGeographicDegrees($dist));
    }
}