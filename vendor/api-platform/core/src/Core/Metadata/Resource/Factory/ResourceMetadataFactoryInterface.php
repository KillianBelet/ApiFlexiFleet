<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Metadata\Resource\Factory;

use ApiPlatform\Core\Metadata\Resource\ResourceMetadata;
use ApiPlatform\Exception\ResourceClassNotFoundException;

/**
 * Creates a resource metadata value object.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ResourceMetadataFactoryInterface
{
    /**
     * Creates a resource metadata.
     *
     * @throws ResourceClassNotFoundException
     */
    public function create(string $resourceClass): ResourceMetadata;
}
