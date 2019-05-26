<?php


namespace tommarti\httpResponse;


class HttpCode
{
    /**
     * Informational response
     */
    public const IR_100 = array('code' => 100, 'message' => "Continue");
    public const IR_101 = array('code' => 101, 'message' => "Switching Protocols");
    public const IR_102 = array('code' => 102, 'message' => "Processing");
    public const IR_103 = array('code' => 103, 'message' => "Early Hints");

    /**
     * success response
     */
    public const S_200 = array('code' => 200, 'message' => "OK");
    public const S_201 = array('code' => 201, 'message' => "Created");
    public const S_202 = array('code' => 202, 'message' => "Accepted");
    public const S_203 = array('code' => 203, 'message' => "Non-Authoritative Information");
    public const S_204 = array('code' => 204, 'message' => "No Content");
    public const S_205 = array('code' => 205, 'message' => "Reset Content");
    public const S_206 = array('code' => 206, 'message' => "Partial Content");
    public const S_207 = array('code' => 207, 'message' => "Multi-Status");
    public const S_208 = array('code' => 208, 'message' => "Already Reported");
    public const S_226 = array('code' => 226, 'message' => "IM Used");


    /**
     * Redirection response
     */
    public const R_300 = array('code' => 300, 'message' => "Multiple Choices");
    public const R_301 = array('code' => 301, 'message' => "Moved Permanently");
    public const R_302 = array('code' => 302, 'message' => "Found");
    public const R_303 = array('code' => 303, 'message' => "See Other");
    public const R_304 = array('code' => 304, 'message' => "Not Modified");
    public const R_305 = array('code' => 305, 'message' => "Use Proxy");
    public const R_306 = array('code' => 306, 'message' => "Switch Proxy");
    public const R_307 = array('code' => 307, 'message' => "Temporary Redirect ");
    public const R_308 = array('code' => 308, 'message' => "Permanent Redirect");


    /**
     * Client error
     */
    public const CE_400 = array('code' => 400, 'message' => "Bad Request");
    public const CE_401 = array('code' => 401, 'message' => "Unauthorized");
    public const CE_402 = array('code' => 402, 'message' => "Payment Required");
    public const CE_403 = array('code' => 403, 'message' => "Forbidden");
    public const CE_404 = array('code' => 404, 'message' => "Not Found");
    public const CE_405 = array('code' => 405, 'message' => "Method Not Allowed");
    public const CE_406 = array('code' => 406, 'message' => "Not Acceptable");
    public const CE_407 = array('code' => 407, 'message' => "Proxy Authentication Required");
    public const CE_408 = array('code' => 408, 'message' => "Request Timeout");
    public const CE_409 = array('code' => 409, 'message' => "Conflict");
    public const CE_410 = array('code' => 410, 'message' => "Gone");
    public const CE_411 = array('code' => 411, 'message' => "Length Required");
    public const CE_412 = array('code' => 412, 'message' => "Precondition Failed");
    public const CE_413 = array('code' => 413, 'message' => "Payload Too Large");
    public const CE_414 = array('code' => 414, 'message' => "URI Too Long");
    public const CE_415 = array('code' => 415, 'message' => "Unsupported Media Type");
    public const CE_416 = array('code' => 416, 'message' => "Range Not Satisfiable");
    public const CE_417 = array('code' => 417, 'message' => "Expectation Failed");
    public const CE_418 = array('code' => 418, 'message' => "I'm a teapot");
    public const CE_421 = array('code' => 421, 'message' => "Misdirected Request");
    public const CE_422 = array('code' => 422, 'message' => "Unprocessable Entity");
    public const CE_423 = array('code' => 423, 'message' => "Locked");
    public const CE_424 = array('code' => 424, 'message' => "Failed Dependency");
    public const CE_425 = array('code' => 425, 'message' => "Too Early");
    public const CE_426 = array('code' => 426, 'message' => "Upgrade Required");
    public const CE_428 = array('code' => 428, 'message' => "Precondition Required");
    public const CE_429 = array('code' => 429, 'message' => "Too Many Requests");
    public const CE_431 = array('code' => 431, 'message' => "Request Header Fields Too Large");
    public const CE_451 = array('code' => 451, 'message' => "Unavailable For Legal Reasons");

    /**
     * Server error
     */
    public const SE_500 = array('code' => 500, 'message' => "Internal Server Error");
    public const SE_501 = array('code' => 501, 'message' => "Not Implemented");
    public const SE_502 = array('code' => 502, 'message' => "Bad Gateway");
    public const SE_503 = array('code' => 503, 'message' => "Service Unavailable");
    public const SE_504 = array('code' => 504, 'message' => "Gateway Timeout");
    public const SE_505 = array('code' => 505, 'message' => "HTTP Version Not Supported");
    public const SE_506 = array('code' => 506, 'message' => "Variant Also Negotiates");
    public const SE_507 = array('code' => 507, 'message' => "Insufficient Storage");
    public const SE_508 = array('code' => 508, 'message' => "Loop Detected");
    public const SE_509 = array('code' => 509, 'message' => "Not Extended");
    public const SE_510 = array('code' => 510, 'message' => "Network Authentication Required");

    /**
     * Unofficial code
     */
    public const UC_103 = array('code' => 103, 'message' => "Checkpoint");
    public const UC_218 = array('code' => 218, 'message' => "This is fine");
    public const UC_419 = array('code' => 419, 'message' => "Page Expired");
    public const UC_420 = array('code' => 420, 'message' => "Method Failure");
    public const UC_420T = array('code' => 420, 'message' => "Enhance Your Calm");
    public const UC_450 = array('code' => 450, 'message' => "Blocked by Windows Parental Controls");
    public const UC_498 = array('code' => 498, 'message' => "Invalid Token");
    public const UC_499 = array('code' => 499, 'message' => "Token Required");
    public const UC_509 = array('code' => 509, 'message' => "Bandwidth Limit Exceeded");
    public const UC_526 = array('code' => 526, 'message' => "Invalid SSL Certificate");
    public const UC_530 = array('code' => 530, 'message' => "Site is frozen");
    public const UC_598 = array('code' => 598, 'message' => "Network read timeout error");

    /**
     * Internet Information Services
     */
    public const IIS_440 = array('code' => 440, 'message' => "Login Time-out");
    public const IIS_449 = array('code' => 449, 'message' => "Retry With");
    public const IIS_451 = array('code' => 451, 'message' => "Redirect");
}
