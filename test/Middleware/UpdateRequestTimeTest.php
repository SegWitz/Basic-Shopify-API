<?php

namespace Segwitz\BasicShopifyAPI\Test\Middleware;

use GuzzleHttp\Psr7\Request;
use Segwitz\BasicShopifyAPI\Middleware\UpdateRequestTime;
use Segwitz\BasicShopifyAPI\Session;
use Segwitz\BasicShopifyAPI\Test\BaseTest;
use Psr\Http\Message\RequestInterface;

class UpdateRequestTimeTest extends BaseTest
{
    public function testRuns(): void
    {
        // Create the client
        $api = $this->buildClient([]);
        $api->setSession(new Session('example.myshopify.com'));

        // Create the middleware instance
        $mw = new UpdateRequestTime($api);

        // Ensure its empty
        $this->assertSame(
            [],
            $api->getRestClient()->getTimeStore()->get($api->getSession())
        );

        // Run a request
        $mw(
            function (RequestInterface $request, array $options): void {
            }
        )(new Request('GET', '/admin/shop.json'), []);

        // Check we have timestamp now
        $this->assertNotEmpty(
            $api->getRestClient()->getTimeStore()->get($api->getSession())
        );
    }
}
