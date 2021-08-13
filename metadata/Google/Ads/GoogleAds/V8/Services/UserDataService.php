<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/user_data_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class UserDataService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v8/enums/user_identifier_source.protogoogle.ads.googleads.v8.enums"r
UserIdentifierSourceEnum"V
UserIdentifierSource
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTYB�
!com.google.ads.googleads.v8.enumsBUserIdentifierSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/common/offline_user_data.protogoogle.ads.googleads.v8.commongoogle/api/annotations.proto"�
OfflineUserAddressInfo
hashed_first_name (	H �
hashed_last_name (	H�
city	 (	H�
state
 (	H�
country_code (	H�
postal_code (	H�"
hashed_street_address (	H�B
_hashed_first_nameB
_hashed_last_nameB
_cityB
_stateB
_country_codeB
_postal_codeB
_hashed_street_address"�
UserIdentifierl
user_identifier_source (2L.google.ads.googleads.v8.enums.UserIdentifierSourceEnum.UserIdentifierSource
hashed_email (	H 
hashed_phone_number (	H 
	mobile_id	 (	H 
third_party_user_id
 (	H N
address_info (26.google.ads.googleads.v8.common.OfflineUserAddressInfoH B

identifier"�
TransactionAttribute"
transaction_date_time (	H �&
transaction_amount_micros	 (H�
currency_code
 (	H�
conversion_action (	H�
order_id (	H�G
store_attribute (2..google.ads.googleads.v8.common.StoreAttribute
custom_value (	H�E
item_attribute (2-.google.ads.googleads.v8.common.ItemAttributeB
_transaction_date_timeB
_transaction_amount_microsB
_currency_codeB
_conversion_actionB
	_order_idB
_custom_value"8
StoreAttribute

store_code (	H �B
_store_code"�
ItemAttribute
item_id (	
merchant_id (H �
country_code (	
language_code (	
quantity (B
_merchant_id"�
UserDataH
user_identifiers (2..google.ads.googleads.v8.common.UserIdentifierS
transaction_attribute (24.google.ads.googleads.v8.common.TransactionAttributeE
user_attribute (2-.google.ads.googleads.v8.common.UserAttribute"�
UserAttribute"
lifetime_value_micros (H �"
lifetime_value_bucket (H�
last_purchase_date_time (	
average_purchase_count (%
average_purchase_value_micros (
acquisition_date_time (	B
_lifetime_value_microsB
_lifetime_value_bucket"E
CustomerMatchUserListMetadata
	user_list (	H �B

_user_list"�
StoreSalesMetadata
loyalty_fraction (H �(
transaction_upload_fraction (H�

custom_key (	H�Z
third_party_metadata (2<.google.ads.googleads.v8.common.StoreSalesThirdPartyMetadataB
_loyalty_fractionB
_transaction_upload_fractionB
_custom_key"�
StoreSalesThirdPartyMetadata(
advertiser_upload_date_time (	H �\'
valid_transaction_fraction (H�#
partner_match_fraction	 (H�$
partner_upload_fraction
 (H�"
bridge_map_version_id (	H�

partner_id (H�B
_advertiser_upload_date_timeB
_valid_transaction_fractionB
_partner_match_fractionB
_partner_upload_fractionB
_bridge_map_version_idB
_partner_idB�
"com.google.ads.googleads.v8.commonBOfflineUserDataProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�	
8google/ads/googleads/v8/services/user_data_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/client.proto"�
UploadUserDataRequest
customer_id (	B�AL

operations (23.google.ads.googleads.v8.services.UserDataOperationB�Aj
!customer_match_user_list_metadata (2=.google.ads.googleads.v8.common.CustomerMatchUserListMetadataH B

metadata"�
UserDataOperation:
create (2(.google.ads.googleads.v8.common.UserDataH :
remove (2(.google.ads.googleads.v8.common.UserDataH B
	operation"�
UploadUserDataResponse
upload_date_time (	H �&
received_operations_count (H�B
_upload_date_timeB
_received_operations_count2�
UserDataService�
UploadUserData7.google.ads.googleads.v8.services.UploadUserDataRequest8.google.ads.googleads.v8.services.UploadUserDataResponse"7���1",/v8/customers/{customer_id=*}:uploadUserData:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBUserDataServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

