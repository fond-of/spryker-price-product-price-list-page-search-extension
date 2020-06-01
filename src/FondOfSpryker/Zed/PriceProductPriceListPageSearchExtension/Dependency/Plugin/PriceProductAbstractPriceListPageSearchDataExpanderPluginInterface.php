<?php

namespace FondOfSpryker\Zed\PriceProductPriceListPageSearchExtension\Dependency\Plugin;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface;

interface PriceProductAbstractPriceListPageSearchDataExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the mapped search data.
     *
     * @api
     *
     * @param array $data
     * @param array $searchData
     *
     * @return array
     */
    public function expand(array $data, array $searchData): array;
}
