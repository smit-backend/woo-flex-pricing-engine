<?php

declare(strict_types=1);

namespace SmitBackend\Wooflexpricingengine\Contracts;

/**
 * Interface PriceRuleInterface
 *
 * @package SmitBackend\Wooflexpricingengine
 */
interface PriceRuleInterface
{
    public function execute(array $payload = []): mixed;
}
