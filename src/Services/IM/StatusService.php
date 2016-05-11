<?php
namespace Fortytwo\SDK\Core\Services\IM;

use Fortytwo\SDK\Core\Interfaces\ServiceInterface;
use Fortytwo\SDK\Core\Services\AbstractService;

/**
 * Service definition to get IM/SMS status
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class StatusService extends AbstractService implements ServiceInterface
{
    /**
     * @var string $prefix prefix used for the API call
     */
    protected $prefix = '1';
    /**
     * @var string $ressource ressource used for the API call
     */
    protected $ressource = 'im/status';
    /**
     * @var string $method HTTP method.
     */
    protected $method = 'GET';
    /**
     * @inehritDoc
     */
    protected $requiredParam = true;
}
