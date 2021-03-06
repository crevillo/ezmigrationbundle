<?php

namespace Kaliop\eZMigrationBundle\Core\API\LocationResolver;

interface LocationResolverInterface
{
    /**
     * Resolves reference to location id
     *
     * @param $reference
     * @return int
     */
    public function resolve($reference);

    /**
     * Tests if $reference should be resolved to location id
     *
     * @param $reference
     * @return bool
     */
    public function shouldResolve($reference);
}
