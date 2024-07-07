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

namespace FOS\OAuthServerBundle\Storage;

/**
 * @author Adrien Brault <adrien.brault@gmail.com>
 */
interface GrantExtensionDispatcherInterface
{
    public function setGrantExtension(string $uri, GrantExtensionInterface $grantExtension): void;
}
