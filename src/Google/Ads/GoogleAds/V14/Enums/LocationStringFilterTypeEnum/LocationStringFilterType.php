<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/location_string_filter_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\LocationStringFilterTypeEnum;

use UnexpectedValueException;

/**
 * Possible types of a location string filter.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.LocationStringFilterTypeEnum.LocationStringFilterType</code>
 */
class LocationStringFilterType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The filter will use exact string matching.
     *
     * Generated from protobuf enum <code>EXACT = 2;</code>
     */
    const EXACT = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXACT => 'EXACT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocationStringFilterType::class, \Google\Ads\GoogleAds\V14\Enums\LocationStringFilterTypeEnum_LocationStringFilterType::class);
