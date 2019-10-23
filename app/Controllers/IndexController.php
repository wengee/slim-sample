<?php declare(strict_types=1);
/**
 * @author   Fung Wing Kit <wengee@gmail.com>
 * @version  2019-10-23 11:30:18 +0800
 */

namespace App\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class IndexController extends ControllerBase
{
    public function index(Request $request, Response $response)
    {
        $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
