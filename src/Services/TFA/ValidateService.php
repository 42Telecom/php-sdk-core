<?php
namespace Fortytwo\SDK\Core\Services\TFA;

use Fortytwo\SDK\Core\Interfaces\ServiceInterface;
use Fortytwo\SDK\Core\Services\AbstractService;

/**
 * Service definition to validate 2FA code.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class ValidateService extends AbstractService implements ServiceInterface
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
    /**
     * @inehritDoc
     */
    protected $requiredParam = true;
}
