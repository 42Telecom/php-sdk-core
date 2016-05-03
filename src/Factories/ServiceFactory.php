<?php
namespace Fortytwo\SDK\Core\Factories;

use Fortytwo\SDK\Core\Services\IM\SendService;
use Fortytwo\SDK\Core\Services\IM\StatusService;
use Fortytwo\SDK\Core\Services\TFA\RequestService;
use Fortytwo\SDK\Core\Services\TFA\ValidateService;

/**
 * Factory to instanciate a service object.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class ServiceFactory
{
    /**
     * Get instance of the specified service.
     *
     * @param string $type type of service to call.
     * @return object Instance of the service.
     */
    public static function get($type)
    {
        $instance = null;

        switch ($type) {

            case 'IM/Send':
                $instance = new SendService();
                break;

            case 'IM/Status':
                $instance = new StatusService();
                break;

            case 'TFA/Request':
                $instance = new RequestService();
                break;

            case 'TFA/Validate':
                $instance = new ValidateService();
                break;

            default:
                throw new \Exception("Error - Unknow service", 1);

        }
        return $instance;
    }
}
