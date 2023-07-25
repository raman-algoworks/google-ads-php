<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/attribution_model.proto

namespace Google\Ads\GoogleAds\V14\Enums\AttributionModelEnum;

use UnexpectedValueException;

/**
 * The attribution model that describes how to distribute credit for a
 * particular conversion across potentially many prior interactions.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AttributionModelEnum.AttributionModel</code>
 */
class AttributionModel
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
     * Uses external attribution.
     *
     * Generated from protobuf enum <code>EXTERNAL = 100;</code>
     */
    const EXTERNAL = 100;
    /**
     * Attributes all credit for a conversion to its last click.
     *
     * Generated from protobuf enum <code>GOOGLE_ADS_LAST_CLICK = 101;</code>
     */
    const GOOGLE_ADS_LAST_CLICK = 101;
    /**
     * Attributes all credit for a conversion to its first click using Google
     * Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK = 102;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK = 102;
    /**
     * Attributes credit for a conversion equally across all of its clicks using
     * Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_LINEAR = 103;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_LINEAR = 103;
    /**
     * Attributes exponentially more credit for a conversion to its more recent
     * clicks using Google Search attribution (half-life is 1 week).
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY = 104;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY = 104;
    /**
     * Attributes 40% of the credit for a conversion to its first and last
     * clicks. Remaining 20% is evenly distributed across all other clicks. This
     * uses Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED = 105;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED = 105;
    /**
     * Flexible model that uses machine learning to determine the appropriate
     * distribution of credit among clicks using Google Search attribution.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN = 106;</code>
     */
    const GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN = 106;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXTERNAL => 'EXTERNAL',
        self::GOOGLE_ADS_LAST_CLICK => 'GOOGLE_ADS_LAST_CLICK',
        self::GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK => 'GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK',
        self::GOOGLE_SEARCH_ATTRIBUTION_LINEAR => 'GOOGLE_SEARCH_ATTRIBUTION_LINEAR',
        self::GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY => 'GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY',
        self::GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED => 'GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED',
        self::GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN => 'GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN',
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
class_alias(AttributionModel::class, \Google\Ads\GoogleAds\V14\Enums\AttributionModelEnum_AttributionModel::class);
