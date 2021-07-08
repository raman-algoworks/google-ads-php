<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/customer.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.Customer</code>
 */
class Customer extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the customer.
     *
     * Generated from protobuf field <code>int64 id = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>string descriptive_name = 20;</code>
     */
    protected $descriptive_name = null;
    /**
     * Immutable. The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>string currency_code = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $currency_code = null;
    /**
     * Immutable. The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>string time_zone = 22 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $time_zone = null;
    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>string tracking_url_template = 23;</code>
     */
    protected $tracking_url_template = null;
    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>string final_url_suffix = 24;</code>
     */
    protected $final_url_suffix = null;
    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>bool auto_tagging_enabled = 25;</code>
     */
    protected $auto_tagging_enabled = null;
    /**
     * Output only. Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>bool has_partners_badge = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_partners_badge = null;
    /**
     * Output only. Whether the customer is a manager.
     *
     * Generated from protobuf field <code>bool manager = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager = null;
    /**
     * Output only. Whether the customer is a test account.
     *
     * Generated from protobuf field <code>bool test_account = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $test_account = null;
    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CallReportingSetting call_reporting_setting = 10;</code>
     */
    protected $call_reporting_setting = null;
    /**
     * Output only. Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.ConversionTrackingSetting conversion_tracking_setting = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_tracking_setting = null;
    /**
     * Output only. Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.RemarketingSetting remarketing_setting = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $remarketing_setting = null;
    /**
     * Output only. Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pay_per_conversion_eligibility_failure_reasons;
    /**
     * Output only. Optimization score of the customer.
     * Optimization score is an estimate of how well a customer's campaigns are
     * set to perform. It ranges from 0% (0.0) to 100% (1.0). This field is null
     * for all manager customers, and for unscored non-manager customers.
     * See "About optimization score" at
     * https://support.google.com/google-ads/answer/9061546.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $optimization_score = null;
    /**
     * Output only. Optimization score weight of the customer.
     * Optimization score weight can be used to compare/aggregate optimization
     * scores across multiple non-manager customers. The aggregate optimization
     * score of a manager is computed as the sum over all of their customers of
     * `Customer.optimization_score * Customer.optimization_score_weight`. This
     * field is 0 for all manager customers, and for unscored non-manager
     * customers.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score_weight = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $optimization_score_weight = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the customer.
     *           Customer resource names have the form:
     *           `customers/{customer_id}`
     *     @type int|string $id
     *           Output only. The ID of the customer.
     *     @type string $descriptive_name
     *           Optional, non-unique descriptive name of the customer.
     *     @type string $currency_code
     *           Immutable. The currency in which the account operates.
     *           A subset of the currency codes from the ISO 4217 standard is
     *           supported.
     *     @type string $time_zone
     *           Immutable. The local timezone ID of the customer.
     *     @type string $tracking_url_template
     *           The URL template for constructing a tracking URL out of parameters.
     *     @type string $final_url_suffix
     *           The URL template for appending params to the final URL
     *     @type bool $auto_tagging_enabled
     *           Whether auto-tagging is enabled for the customer.
     *     @type bool $has_partners_badge
     *           Output only. Whether the Customer has a Partners program badge. If the Customer is not
     *           associated with the Partners program, this will be false. For more
     *           information, see https://support.google.com/partners/answer/3125774.
     *     @type bool $manager
     *           Output only. Whether the customer is a manager.
     *     @type bool $test_account
     *           Output only. Whether the customer is a test account.
     *     @type \Google\Ads\GoogleAds\V7\Resources\CallReportingSetting $call_reporting_setting
     *           Call reporting setting for a customer.
     *     @type \Google\Ads\GoogleAds\V7\Resources\ConversionTrackingSetting $conversion_tracking_setting
     *           Output only. Conversion tracking setting for a customer.
     *     @type \Google\Ads\GoogleAds\V7\Resources\RemarketingSetting $remarketing_setting
     *           Output only. Remarketing setting for a customer.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $pay_per_conversion_eligibility_failure_reasons
     *           Output only. Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     *           the list is empty, the customer is eligible. This field is read-only.
     *     @type float $optimization_score
     *           Output only. Optimization score of the customer.
     *           Optimization score is an estimate of how well a customer's campaigns are
     *           set to perform. It ranges from 0% (0.0) to 100% (1.0). This field is null
     *           for all manager customers, and for unscored non-manager customers.
     *           See "About optimization score" at
     *           https://support.google.com/google-ads/answer/9061546.
     *           This field is read-only.
     *     @type float $optimization_score_weight
     *           Output only. Optimization score weight of the customer.
     *           Optimization score weight can be used to compare/aggregate optimization
     *           scores across multiple non-manager customers. The aggregate optimization
     *           score of a manager is computed as the sum over all of their customers of
     *           `Customer.optimization_score * Customer.optimization_score_weight`. This
     *           field is 0 for all manager customers, and for unscored non-manager
     *           customers.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the customer.
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the customer.
     *
     * Generated from protobuf field <code>int64 id = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the customer.
     *
     * Generated from protobuf field <code>int64 id = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>string descriptive_name = 20;</code>
     * @return string
     */
    public function getDescriptiveName()
    {
        return isset($this->descriptive_name) ? $this->descriptive_name : '';
    }

    public function hasDescriptiveName()
    {
        return isset($this->descriptive_name);
    }

    public function clearDescriptiveName()
    {
        unset($this->descriptive_name);
    }

    /**
     * Optional, non-unique descriptive name of the customer.
     *
     * Generated from protobuf field <code>string descriptive_name = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkString($var, True);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * Immutable. The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>string currency_code = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * Immutable. The currency in which the account operates.
     * A subset of the currency codes from the ISO 4217 standard is
     * supported.
     *
     * Generated from protobuf field <code>string currency_code = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Immutable. The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>string time_zone = 22 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return isset($this->time_zone) ? $this->time_zone : '';
    }

    public function hasTimeZone()
    {
        return isset($this->time_zone);
    }

    public function clearTimeZone()
    {
        unset($this->time_zone);
    }

    /**
     * Immutable. The local timezone ID of the customer.
     *
     * Generated from protobuf field <code>string time_zone = 22 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>string tracking_url_template = 23;</code>
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : '';
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * The URL template for constructing a tracking URL out of parameters.
     *
     * Generated from protobuf field <code>string tracking_url_template = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>string final_url_suffix = 24;</code>
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : '';
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * The URL template for appending params to the final URL
     *
     * Generated from protobuf field <code>string final_url_suffix = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>bool auto_tagging_enabled = 25;</code>
     * @return bool
     */
    public function getAutoTaggingEnabled()
    {
        return isset($this->auto_tagging_enabled) ? $this->auto_tagging_enabled : false;
    }

    public function hasAutoTaggingEnabled()
    {
        return isset($this->auto_tagging_enabled);
    }

    public function clearAutoTaggingEnabled()
    {
        unset($this->auto_tagging_enabled);
    }

    /**
     * Whether auto-tagging is enabled for the customer.
     *
     * Generated from protobuf field <code>bool auto_tagging_enabled = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoTaggingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_tagging_enabled = $var;

        return $this;
    }

    /**
     * Output only. Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>bool has_partners_badge = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasPartnersBadge()
    {
        return isset($this->has_partners_badge) ? $this->has_partners_badge : false;
    }

    public function hasHasPartnersBadge()
    {
        return isset($this->has_partners_badge);
    }

    public function clearHasPartnersBadge()
    {
        unset($this->has_partners_badge);
    }

    /**
     * Output only. Whether the Customer has a Partners program badge. If the Customer is not
     * associated with the Partners program, this will be false. For more
     * information, see https://support.google.com/partners/answer/3125774.
     *
     * Generated from protobuf field <code>bool has_partners_badge = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasPartnersBadge($var)
    {
        GPBUtil::checkBool($var);
        $this->has_partners_badge = $var;

        return $this;
    }

    /**
     * Output only. Whether the customer is a manager.
     *
     * Generated from protobuf field <code>bool manager = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getManager()
    {
        return isset($this->manager) ? $this->manager : false;
    }

    public function hasManager()
    {
        return isset($this->manager);
    }

    public function clearManager()
    {
        unset($this->manager);
    }

    /**
     * Output only. Whether the customer is a manager.
     *
     * Generated from protobuf field <code>bool manager = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkBool($var);
        $this->manager = $var;

        return $this;
    }

    /**
     * Output only. Whether the customer is a test account.
     *
     * Generated from protobuf field <code>bool test_account = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getTestAccount()
    {
        return isset($this->test_account) ? $this->test_account : false;
    }

    public function hasTestAccount()
    {
        return isset($this->test_account);
    }

    public function clearTestAccount()
    {
        unset($this->test_account);
    }

    /**
     * Output only. Whether the customer is a test account.
     *
     * Generated from protobuf field <code>bool test_account = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkBool($var);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\CallReportingSetting|null
     */
    public function getCallReportingSetting()
    {
        return isset($this->call_reporting_setting) ? $this->call_reporting_setting : null;
    }

    public function hasCallReportingSetting()
    {
        return isset($this->call_reporting_setting);
    }

    public function clearCallReportingSetting()
    {
        unset($this->call_reporting_setting);
    }

    /**
     * Call reporting setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.CallReportingSetting call_reporting_setting = 10;</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\CallReportingSetting $var
     * @return $this
     */
    public function setCallReportingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\CallReportingSetting::class);
        $this->call_reporting_setting = $var;

        return $this;
    }

    /**
     * Output only. Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.ConversionTrackingSetting conversion_tracking_setting = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\ConversionTrackingSetting|null
     */
    public function getConversionTrackingSetting()
    {
        return isset($this->conversion_tracking_setting) ? $this->conversion_tracking_setting : null;
    }

    public function hasConversionTrackingSetting()
    {
        return isset($this->conversion_tracking_setting);
    }

    public function clearConversionTrackingSetting()
    {
        unset($this->conversion_tracking_setting);
    }

    /**
     * Output only. Conversion tracking setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.ConversionTrackingSetting conversion_tracking_setting = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\ConversionTrackingSetting $var
     * @return $this
     */
    public function setConversionTrackingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\ConversionTrackingSetting::class);
        $this->conversion_tracking_setting = $var;

        return $this;
    }

    /**
     * Output only. Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.RemarketingSetting remarketing_setting = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V7\Resources\RemarketingSetting|null
     */
    public function getRemarketingSetting()
    {
        return isset($this->remarketing_setting) ? $this->remarketing_setting : null;
    }

    public function hasRemarketingSetting()
    {
        return isset($this->remarketing_setting);
    }

    public function clearRemarketingSetting()
    {
        unset($this->remarketing_setting);
    }

    /**
     * Output only. Remarketing setting for a customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.resources.RemarketingSetting remarketing_setting = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\RemarketingSetting $var
     * @return $this
     */
    public function setRemarketingSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V7\Resources\RemarketingSetting::class);
        $this->remarketing_setting = $var;

        return $this;
    }

    /**
     * Output only. Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayPerConversionEligibilityFailureReasons()
    {
        return $this->pay_per_conversion_eligibility_failure_reasons;
    }

    /**
     * Output only. Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
     * the list is empty, the customer is eligible. This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason pay_per_conversion_eligibility_failure_reasons = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayPerConversionEligibilityFailureReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V7\Enums\CustomerPayPerConversionEligibilityFailureReasonEnum\CustomerPayPerConversionEligibilityFailureReason::class);
        $this->pay_per_conversion_eligibility_failure_reasons = $arr;

        return $this;
    }

    /**
     * Output only. Optimization score of the customer.
     * Optimization score is an estimate of how well a customer's campaigns are
     * set to perform. It ranges from 0% (0.0) to 100% (1.0). This field is null
     * for all manager customers, and for unscored non-manager customers.
     * See "About optimization score" at
     * https://support.google.com/google-ads/answer/9061546.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getOptimizationScore()
    {
        return isset($this->optimization_score) ? $this->optimization_score : 0.0;
    }

    public function hasOptimizationScore()
    {
        return isset($this->optimization_score);
    }

    public function clearOptimizationScore()
    {
        unset($this->optimization_score);
    }

    /**
     * Output only. Optimization score of the customer.
     * Optimization score is an estimate of how well a customer's campaigns are
     * set to perform. It ranges from 0% (0.0) to 100% (1.0). This field is null
     * for all manager customers, and for unscored non-manager customers.
     * See "About optimization score" at
     * https://support.google.com/google-ads/answer/9061546.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setOptimizationScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->optimization_score = $var;

        return $this;
    }

    /**
     * Output only. Optimization score weight of the customer.
     * Optimization score weight can be used to compare/aggregate optimization
     * scores across multiple non-manager customers. The aggregate optimization
     * score of a manager is computed as the sum over all of their customers of
     * `Customer.optimization_score * Customer.optimization_score_weight`. This
     * field is 0 for all manager customers, and for unscored non-manager
     * customers.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score_weight = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getOptimizationScoreWeight()
    {
        return $this->optimization_score_weight;
    }

    /**
     * Output only. Optimization score weight of the customer.
     * Optimization score weight can be used to compare/aggregate optimization
     * scores across multiple non-manager customers. The aggregate optimization
     * score of a manager is computed as the sum over all of their customers of
     * `Customer.optimization_score * Customer.optimization_score_weight`. This
     * field is 0 for all manager customers, and for unscored non-manager
     * customers.
     * This field is read-only.
     *
     * Generated from protobuf field <code>double optimization_score_weight = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setOptimizationScoreWeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->optimization_score_weight = $var;

        return $this;
    }

}
