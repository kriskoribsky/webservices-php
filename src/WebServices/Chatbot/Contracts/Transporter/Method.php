<?php declare(strict_types=1);

namespace WebServices\Chatbot\Contracts\Transporter;

enum Method: string
{
    case HEAD = 'HEAD';
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}
