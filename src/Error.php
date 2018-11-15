<?php

namespace MarketoClient;

interface Error
{
    const EMPTY_ACCESS_TOKEN = 600;
    const ACCESS_TOKEN_INVALID = 601;
    const ACCESS_TOKEN_EXPIRED = 602;
    const ACCESS_DENIED = 603;
    const REQUEST_TIMED_OUT = 604;
    const HTTP_METHOD_NOT_SUPPORTED = 604;
    const RATE_LIMIT_EXCEEDED = 606;
    const DAILY_QUOTA_REACHED = 607;
    const API_UNAVAILABLE = 608;
    const INVALID_JSON = 609;
    const RESOURCE_NOT_FOUND = 610;
    const SYSTEM_ERROR = 611;
    const INVALID_CONTENT_TYPE = 612;
    const INVALID_MULTIPART_REQUEST = 613;
    const INVALID_SUBSCRIPTION = 614;
    const CONCURRENT_LIMIT_REACHED = 615;
    const FIELD_CANT_BE_BLANK = 701;
    const NO_DATA_FOUND = 702;
    const FEATURE_NOT_ENABLED = 703;
    const INVALID_DATE_FORMAT = 704;
    const BUSINESS_RULE_VIOLATION = 709;
    const PARENT_FOLDER_NOT_FOUND = 710;
    const INCOMPATIBLE_FOLDER_TYPE = 711;

    const INVALID_VALUE = 1001;
    const MISSING_VALUE = 1002;
    const INVALID_DATA = 1003;
    const LEAD_ALREADY_EXISTS = 1005;
    const FIELD_NOT_FOUND = 1006;
    const MULTIPLE_LEADS_MATCH = 1007;
    const PARTITION_ACCESS_DENIED = 1008;
    const PARTITION_NAME_MISSING = 1009;
    const PARTITION_UPDATE_NOT_ALLOWED = 1010;
    const FIELD_NOT_SUPPORTED = 1011;
    const INVALID_COOKIE_VALUE = 1012;
    const OBJECT_NOT_FOUND = 1013;
    const FAILED_TO_CREATE_OBJECT = 1014;
    const LEAD_IS_NOT_IN_LIST = 1015;
    const TOO_MANY_IMPORTS = 1016;
    const OBJECT_ALREADY_EXISTS = 1017;
    const CRM_ENABLED = 1018;
    const IMPORT_IN_PROGRESS = 1019;
    const TOO_MANY_CLONE_TO_PROGRAM = 1020;
    const COMPANY_UPDATE_NOT_ALLOWED = 1021;
    const OBJECT_IN_USE = 1022;
    const PROGRAM_STATUS_NOT_FOUND = 1025;
    const CUSTOM_OBJECT_NOT_ENABLED = 1026;
    const MAX_FIELD_LIMIT_REACHED = 1028;
    const TOO_MANY_JOBS_IN_QUEUE = 1029;
    const UNSUPPORTED_FILTER_TYPE = 1035;
    const INVALID_RUNAT_DATE = 1042;
}
