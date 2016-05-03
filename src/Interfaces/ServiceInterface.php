<?php
namespace Fortytwo\SDK\Core\Interfaces;

/**
 * A service return the basic information about a specific API service/ressource.
 */
interface ServiceInterface
{
    /**
     * Return the scheme (HTTP or HTTPS)
     */
    public function getScheme();

    /**
     * Return the domain
     */
    public function getDomain();

    /**
     * Return the ressource
     */
    public function getPrefix();

    /**
     * Return the ressource
     */
    public function getRessource();

    /**
     * Return the method
     */
    public function getMethod();

    /**
     * Return the complete endpoint (Scheme + Domain + Prefix + Ressource)
     */
    public function getEndPoint();
}
