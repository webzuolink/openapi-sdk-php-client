<?php

namespace AlibabaCloud\Client\Signature;

/**
 * Class ShaHmac1Signature
 *
 * @package   AlibabaCloud\Signature
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/openapi-sdk-php-client
 */
class ShaHmac1Signature implements SignatureInterface
{

    /**
     * @param string $string
     * @param string $accessKeySecret
     *
     * @return string
     */
    public function sign($string, $accessKeySecret)
    {
        return base64_encode(hash_hmac('sha1', $string, $accessKeySecret, true));
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'HMAC-SHA1';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return '';
    }
}
