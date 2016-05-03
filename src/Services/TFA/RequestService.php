<?php
namespace Fortytwo\SDK\Core\Services\TFA;

use Fortytwo\SDK\Core\Interfaces\ServiceInterface;
use Fortytwo\SDK\Core\Services\AbstractService;

/**
 * Service definition to request 2FA code.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class RequestService extends AbstractService implements ServiceInterface
{
    /**
     * @var string $prefix prefix used for the API call
     */
    protected $prefix = '1';
    /**
     * @var string $ressource ressource used for the API call
     */
    protected $ressource = '2fa';
    /**
     * @var string $method HTTP method.
     */
    protected $method = 'POST';
}
