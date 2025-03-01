<?php

declare(strict_types=1);

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\OAuthServerBundle\Tests\Propel;

use FOS\OAuthServerBundle\Propel\Client;
use OAuth2\OAuth2;

/**
 * @group propel
 */
class ClientTest extends PropelTestCase
{
    public function testConstructor(): void
    {
        $client = new Client();

        $this->assertNotNull($client->getRandomId());
        $this->assertNotNull($client->getSecret());

        $types = $client->getAllowedGrantTypes();
        $this->assertCount(1, $types);
        $this->assertSame(OAuth2::GRANT_TYPE_AUTH_CODE, $types[0]);
    }

    public function testCheckSecretWithInvalidArgument(): void
    {
        $client = new Client();

        $this->assertFalse($client->checkSecret('foo'));
        $this->assertFalse($client->checkSecret(''));
        $this->assertFalse($client->checkSecret(null));
    }

    public function testCheckSecret(): void
    {
        $client = new Client();
        $client->setSecret('foo');

        $this->assertTrue($client->checkSecret('foo'));
    }
}
