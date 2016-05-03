<?php
namespace Fortytwo\SDK\Core\Services;

/**
 * Abstract class to define a service
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
abstract class AbstractService
{
    /**
     * @var string predefined scheme
     */
    protected $scheme = 'https';
    /**
     * @var string predefined domain
     */
    protected $domain = 'rest.fortytwo.com';
    /**
     * @var string predefined prefix
     */
    protected $prefix = '1';
    /**
     * @var bool predefined required parameter value
     * This param tell us if the endpoint need extra/custom param(s) or not.
     */
    protected $requiredParam = false;

    /**
     * @inehritDoc
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @inehritDoc
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @inehritDoc
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @inehritDoc
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * @inehritDoc
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @inehritDoc
     */
    public function getEndPoint()
    {
        return $this->scheme . '://' . $this->domain . '/' . $this->prefix . '/' . $this->ressource;
    }
}
