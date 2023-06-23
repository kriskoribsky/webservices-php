<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Http\Common;

/**
 * Represents the content type used in HTTP requests.
 */
enum ContentType: string
{
    /**
     * Plain text content type.
     */
    case TEXT_PLAIN = 'text/plain';

    /**
     * HTML content type.
     */
    case TEXT_HTML = 'text/html';

    /**
     * JSON content type.
     */
    case JSON = 'application/json';

    /**
     * XML content type.
     */
    case XML = 'application/xml';

    /**
     * PDF content type.
     */
    case PDF = 'application/pdf';

    /**
     * URL-encoded form data content type.
     */
    case URL_ENCODED = 'application/x-www-form-urlencoded';

    /**
     * Multipart form data content type.
     */
    case MULTIPART = 'multipart/form-data';

    /**
     * JPEG image content type.
     */
    case IMAGE_JPEG = 'image/jpeg';

    /**
     * PNG image content type.
     */
    case IMAGE_PNG = 'image/png';

    /**
     * GIF image content type.
     */
    case IMAGE_GIF = 'image/gif';

    /**
     * MPEG audio content type.
     */
    case AUDIO_MPEG = 'audio/mpeg';

    /**
     * WAV audio content type.
     */
    case AUDIO_WAV = 'audio/wav';

    /**
     * MPEG video content type.
     */
    case VIDEO_MPEG = 'video/mpeg';

    /**
     * MP4 video content type.
     */
    case VIDEO_MP4 = 'video/mp4';

    /**
     * Returns the complete `Content-Type` header string used in HTTP requests.
     *
     * @param self $contentType The content type enum value
     * @return string The complete `Content-Type` header string
     */
    public static function toHeaderContentType(self $contentType): string
    {
        return 'Content-Type: ' . $contentType->value;
    }
}
