<?php

namespace Chainside\SDK\WebPos\Exceptions;

class ChainsideError
{

    const VALIDATION_ERROR = '0001';
    const INVALID_CALLBACK_ERROR = '0013';
    const UNAUTHORIZED_CLIENT_ERROR = '1001';
    const INVALID_GRANT_TYPE_ERROR = '1002';
    const ACCESS_TOKEN_EXPIRED_ERROR = '1004';
    const INVALID_REFRESH_TOKEN_ERROR = '1006';
    const INVALID_ACCESS_TOKEN_ERROR = '1007';
    const FORBIDDEN_ERROR = '1012';
    const INVALID_SCOPE_ERROR = '1013';
    const INVALID_REALM_ERROR = '1018';
    const TOO_MANY_REQUESTS_ERROR = '2000';
    const INVALID_AUTHORIZATION_HEADER_ERROR = '3007';
    const INVALID_CONTENT_TYPE_HEADER_ERROR = '3012';
    const INVALID_ACCEPT_HEADER_ERROR = '3013';
    const INTERNAL_SERVER_ERROR = '4000';
    const NOT_FOUND_ERROR = '3001';
    const METHOD_NOT_ALLOWED_ERROR = '3003';
    const RATE_UNAVAILABLE_ERROR = '4003';
    const FUNCTIONALITY_DOWN_ERROR = '4006';
    
}