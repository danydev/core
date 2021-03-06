<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Core\Bridge\Doctrine\Orm\Extension;

use Doctrine\ORM\QueryBuilder;

/**
 * Interface of Doctrine ORM query extensions that supports result production
 * for specific cases such as Query alteration.
 *
 * @author Antoine BLUCHET <soyuka@gmail.com>
 */
interface QueryResultItemExtensionInterface extends QueryItemExtensionInterface
{
    /**
     * @param string      $resourceClass
     * @param string|null $operationName
     *
     * @return bool
     */
    public function supportsResult(string $resourceClass, string $operationName = null) : bool;

    /**
     * @param QueryBuilder $queryBuilder
     *
     * @return mixed
     */
    public function getResult(QueryBuilder $queryBuilder);
}
