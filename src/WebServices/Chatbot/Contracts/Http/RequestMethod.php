<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Transporter;

/**
 * Represents the HTTP request method.
 */
enum RequestMethod: string
{
    /**
     * The GET method retrieves a representation of the specified resource.
     */
    case GET = 'GET';

    /**
     * The HEAD method is identical to GET, but it doesn't return a response body.
     * It is useful for retrieving response headers and checking the existence of a resource.
     */
    case HEAD = 'HEAD';

    /**
     * The POST method is used to submit an entity to the specified resource,
     * often resulting in the creation of a new resource.
     */
    case POST = 'POST';

    /**
     * The PUT method replaces all current representations of the target
     * resource with the request payload.
     */
    case PUT = 'PUT';

    /**
     * The DELETE method deletes the specified resource.
     */
    case DELETE = 'DELETE';

    /**
     * The CONNECT method establishes a tunnel to the server identified by the target resource.
     */
    case CONNECT = 'CONNECT';

    /**
     * The OPTIONS method is used to describe the communication options for the target resource.
     */
    case OPTIONS = 'OPTIONS';

    /**
     * The TRACE method performs a message loop-back test along the path to the target resource,
     * providing a means to check for request message transformations.
     */
    case TRACE = 'TRACE';

    /**
     * The PATCH method is used to apply partial modifications to a resource.
     */
    case PATCH = 'PATCH';
}
