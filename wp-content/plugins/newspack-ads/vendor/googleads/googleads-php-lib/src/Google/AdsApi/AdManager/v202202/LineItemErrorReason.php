<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemErrorReason
{
    const ALREADY_STARTED = 'ALREADY_STARTED';
    const UPDATE_RESERVATION_NOT_ALLOWED = 'UPDATE_RESERVATION_NOT_ALLOWED';
    const ALL_ROADBLOCK_NOT_ALLOWED = 'ALL_ROADBLOCK_NOT_ALLOWED';
    const ALL_COMPANION_DELIVERY_NOT_ALLOWED = 'ALL_COMPANION_DELIVERY_NOT_ALLOWED';
    const CREATIVE_SET_ROADBLOCK_NOT_ALLOWED = 'CREATIVE_SET_ROADBLOCK_NOT_ALLOWED';
    const FRACTIONAL_PERCENTAGE_NOT_ALLOWED = 'FRACTIONAL_PERCENTAGE_NOT_ALLOWED';
    const DISCOUNT_NOT_ALLOWED = 'DISCOUNT_NOT_ALLOWED';
    const UPDATE_CANCELED_LINE_ITEM_NOT_ALLOWED = 'UPDATE_CANCELED_LINE_ITEM_NOT_ALLOWED';
    const UPDATE_PENDING_APPROVAL_LINE_ITEM_NOT_ALLOWED = 'UPDATE_PENDING_APPROVAL_LINE_ITEM_NOT_ALLOWED';
    const UPDATE_ARCHIVED_LINE_ITEM_NOT_ALLOWED = 'UPDATE_ARCHIVED_LINE_ITEM_NOT_ALLOWED';
    const CREATE_OR_UPDATE_LEGACY_DFP_LINE_ITEM_TYPE_NOT_ALLOWED = 'CREATE_OR_UPDATE_LEGACY_DFP_LINE_ITEM_TYPE_NOT_ALLOWED';
    const COPY_LINE_ITEM_FROM_DIFFERENT_COMPANY_NOT_ALLOWED = 'COPY_LINE_ITEM_FROM_DIFFERENT_COMPANY_NOT_ALLOWED';
    const INVALID_SIZE_FOR_PLATFORM = 'INVALID_SIZE_FOR_PLATFORM';
    const INVALID_LINE_ITEM_TYPE_FOR_PLATFORM = 'INVALID_LINE_ITEM_TYPE_FOR_PLATFORM';
    const INVALID_WEB_PROPERTY_FOR_PLATFORM = 'INVALID_WEB_PROPERTY_FOR_PLATFORM';
    const INVALID_WEB_PROPERTY_FOR_ENVIRONMENT = 'INVALID_WEB_PROPERTY_FOR_ENVIRONMENT';
    const AFMA_BACKFILL_NOT_ALLOWED = 'AFMA_BACKFILL_NOT_ALLOWED';
    const UPDATE_ENVIRONMENT_TYPE_NOT_ALLOWED = 'UPDATE_ENVIRONMENT_TYPE_NOT_ALLOWED';
    const COMPANIONS_NOT_ALLOWED = 'COMPANIONS_NOT_ALLOWED';
    const ROADBLOCKS_WITH_NONROADBLOCKS_NOT_ALLOWED = 'ROADBLOCKS_WITH_NONROADBLOCKS_NOT_ALLOWED';
    const CANNOT_UPDATE_TO_OR_FROM_CREATIVE_SET_ROADBLOCK = 'CANNOT_UPDATE_TO_OR_FROM_CREATIVE_SET_ROADBLOCK';
    const UPDATE_FROM_BACKFILL_LINE_ITEM_TYPE_NOT_ALLOWED = 'UPDATE_FROM_BACKFILL_LINE_ITEM_TYPE_NOT_ALLOWED';
    const UPDATE_TO_BACKFILL_LINE_ITEM_TYPE_NOT_ALLOWED = 'UPDATE_TO_BACKFILL_LINE_ITEM_TYPE_NOT_ALLOWED';
    const UPDATE_BACKFILL_WEB_PROPERTY_NOT_ALLOWED = 'UPDATE_BACKFILL_WEB_PROPERTY_NOT_ALLOWED';
    const INVALID_COMPANION_DELIVERY_OPTION_FOR_ENVIRONMENT_TYPE = 'INVALID_COMPANION_DELIVERY_OPTION_FOR_ENVIRONMENT_TYPE';
    const COMPANION_BACKFILL_REQUIRES_VIDEO = 'COMPANION_BACKFILL_REQUIRES_VIDEO';
    const COMPANION_DELIVERY_OPTION_REQUIRE_PREMIUM = 'COMPANION_DELIVERY_OPTION_REQUIRE_PREMIUM';
    const DUPLICATE_MASTER_SIZES = 'DUPLICATE_MASTER_SIZES';
    const INVALID_PRIORITY_FOR_LINE_ITEM_TYPE = 'INVALID_PRIORITY_FOR_LINE_ITEM_TYPE';
    const INVALID_ENVIRONMENT_TYPE = 'INVALID_ENVIRONMENT_TYPE';
    const INVALID_ENVIRONMENT_TYPE_FOR_PLATFORM = 'INVALID_ENVIRONMENT_TYPE_FOR_PLATFORM';
    const INVALID_TYPE_FOR_AUTO_EXTENSION = 'INVALID_TYPE_FOR_AUTO_EXTENSION';
    const VIDEO_INVALID_ROADBLOCKING = 'VIDEO_INVALID_ROADBLOCKING';
    const BACKFILL_TYPE_NOT_ALLOWED = 'BACKFILL_TYPE_NOT_ALLOWED';
    const INVALID_BACKFILL_LINK_TYPE = 'INVALID_BACKFILL_LINK_TYPE';
    const DIFFERENT_BACKFILL_ACCOUNT = 'DIFFERENT_BACKFILL_ACCOUNT';
    const COMPANION_DELIVERY_OPTIONS_NOT_ALLOWED_WITH_BACKFILL = 'COMPANION_DELIVERY_OPTIONS_NOT_ALLOWED_WITH_BACKFILL';
    const INVALID_WEB_PROPERTY_FOR_ADX_BACKFILL = 'INVALID_WEB_PROPERTY_FOR_ADX_BACKFILL';
    const INVALID_COST_PER_UNIT_FOR_BACKFILL = 'INVALID_COST_PER_UNIT_FOR_BACKFILL';
    const INVALID_SIZE_FOR_ENVIRONMENT = 'INVALID_SIZE_FOR_ENVIRONMENT';
    const TARGET_PLATOFRM_NOT_ALLOWED = 'TARGET_PLATOFRM_NOT_ALLOWED';
    const INVALID_LINE_ITEM_CURRENCY = 'INVALID_LINE_ITEM_CURRENCY';
    const LINE_ITEM_CANNOT_HAVE_MULTIPLE_CURRENCIES = 'LINE_ITEM_CANNOT_HAVE_MULTIPLE_CURRENCIES';
    const CANNOT_CHANGE_CURRENCY = 'CANNOT_CHANGE_CURRENCY';
    const INVALID_LINE_ITEM_DATE_TIME = 'INVALID_LINE_ITEM_DATE_TIME';
    const INVALID_COST_PER_UNIT_FOR_CPA = 'INVALID_COST_PER_UNIT_FOR_CPA';
    const UPDATE_CPA_COST_TYPE_NOT_ALLOWED = 'UPDATE_CPA_COST_TYPE_NOT_ALLOWED';
    const UPDATE_VCPM_COST_TYPE_NOT_ALLOWED = 'UPDATE_VCPM_COST_TYPE_NOT_ALLOWED';
    const MASTER_COMPANION_LINE_ITEM_CANNOT_HAVE_VCPM_COST_TYPE = 'MASTER_COMPANION_LINE_ITEM_CANNOT_HAVE_VCPM_COST_TYPE';
    const DUPLICATED_UNIT_TYPE = 'DUPLICATED_UNIT_TYPE';
    const MULTIPLE_GOAL_TYPE_NOT_ALLOWED = 'MULTIPLE_GOAL_TYPE_NOT_ALLOWED';
    const INVALID_UNIT_TYPE_COMBINATION_FOR_SECONDARY_GOALS = 'INVALID_UNIT_TYPE_COMBINATION_FOR_SECONDARY_GOALS';
    const INVALID_CREATIVE_TARGETING_NAME = 'INVALID_CREATIVE_TARGETING_NAME';
    const INVALID_CREATIVE_CUSTOM_TARGETING_MATCH_TYPE = 'INVALID_CREATIVE_CUSTOM_TARGETING_MATCH_TYPE';
    const INVALID_CREATIVE_ROTATION_TYPE_WITH_CREATIVE_TARGETING = 'INVALID_CREATIVE_ROTATION_TYPE_WITH_CREATIVE_TARGETING';
    const CANNOT_OVERBOOK_WITH_CREATIVE_TARGETING = 'CANNOT_OVERBOOK_WITH_CREATIVE_TARGETING';
    const PLACEHOLDERS_DO_NOT_MATCH_PROPOSAL = 'PLACEHOLDERS_DO_NOT_MATCH_PROPOSAL';
    const UNSUPPORTED_LINE_ITEM_TYPE_FOR_THIS_API_VERSION = 'UNSUPPORTED_LINE_ITEM_TYPE_FOR_THIS_API_VERSION';
    const NATIVE_CREATIVE_TEMPLATE_REQUIRED = 'NATIVE_CREATIVE_TEMPLATE_REQUIRED';
    const CANNOT_HAVE_CREATIVE_TEMPLATE = 'CANNOT_HAVE_CREATIVE_TEMPLATE';
    const CANNOT_INCLUDE_NATIVE_CREATIVE_TEMPLATE = 'CANNOT_INCLUDE_NATIVE_CREATIVE_TEMPLATE';
    const CANNOT_INCLUDE_NATIVE_PLACEHOLDER_WITHOUT_TEMPLATE_ID = 'CANNOT_INCLUDE_NATIVE_PLACEHOLDER_WITHOUT_TEMPLATE_ID';
    const NO_SIZE_WITH_DURATION = 'NO_SIZE_WITH_DURATION';
    const INVALID_VIEWABILITY_PROVIDER_COMPANY = 'INVALID_VIEWABILITY_PROVIDER_COMPANY';
    const CANNOT_ACCESS_CUSTOM_PACING_CURVE_CLOUD_STORAGE_BUCKET = 'CANNOT_ACCESS_CUSTOM_PACING_CURVE_CLOUD_STORAGE_BUCKET';
    const CMS_METADATA_LINE_ITEM_ENVIRONMENT_TYPE_NOT_SUPPORTED = 'CMS_METADATA_LINE_ITEM_ENVIRONMENT_TYPE_NOT_SUPPORTED';
    const SKIPPABLE_AD_TYPE_NOT_ALLOWED = 'SKIPPABLE_AD_TYPE_NOT_ALLOWED';
    const CUSTOM_PACING_CURVE_START_TIME_MUST_MATCH_LINE_ITEM_START_TIME = 'CUSTOM_PACING_CURVE_START_TIME_MUST_MATCH_LINE_ITEM_START_TIME';
    const CUSTOM_PACING_CURVE_START_TIME_PAST_LINE_ITEM_END_TIME = 'CUSTOM_PACING_CURVE_START_TIME_PAST_LINE_ITEM_END_TIME';
    const INVALID_LINE_ITEM_TYPE_FOR_DELIVERY_FORECAST_SOURCE = 'INVALID_LINE_ITEM_TYPE_FOR_DELIVERY_FORECAST_SOURCE';
    const INVALID_TOTAL_CUSTOM_PACING_GOAL_AMOUNTS = 'INVALID_TOTAL_CUSTOM_PACING_GOAL_AMOUNTS';
    const COPY_LINE_ITEM_WITH_CUSTOM_PACING_CURVE_FULLY_IN_PAST_NOT_ALLOWED = 'COPY_LINE_ITEM_WITH_CUSTOM_PACING_CURVE_FULLY_IN_PAST_NOT_ALLOWED';
    const LAST_CUSTOM_PACING_GOAL_AMOUNT_CANNOT_BE_ZERO = 'LAST_CUSTOM_PACING_GOAL_AMOUNT_CANNOT_BE_ZERO';
    const GRP_PACED_LINE_ITEM_CANNOT_HAVE_ABSOLUTE_CUSTOM_PACING_CURVE_GOALS = 'GRP_PACED_LINE_ITEM_CANNOT_HAVE_ABSOLUTE_CUSTOM_PACING_CURVE_GOALS';
    const INVALID_MAX_VIDEO_CREATIVE_DURATION = 'INVALID_MAX_VIDEO_CREATIVE_DURATION';
    const INVALID_NATIVE_SIZE = 'INVALID_NATIVE_SIZE';
    const INVALID_TARGETED_REQUEST_PLATFORM_FOR_WEB_PROPERTY_CODE = 'INVALID_TARGETED_REQUEST_PLATFORM_FOR_WEB_PROPERTY_CODE';
    const UNKNOWN = 'UNKNOWN';


}
