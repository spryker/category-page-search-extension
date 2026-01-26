<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CategoryPageSearchExtension\Dependency\Plugin;

use Generated\Shared\Transfer\NodeTransfer;

interface CategoryNodePageSearchDataExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the provided category node page search data array and returns the modified version.
     *
     * @api
     *
     * @param array<string, mixed> $data
     * @param \Generated\Shared\Transfer\NodeTransfer $nodeTransfer
     * @param string $storeName
     * @param string $localeName
     *
     * @return array<string, mixed>
     */
    public function expandCategoryNodePageSearchData(
        array $data,
        NodeTransfer $nodeTransfer,
        string $storeName,
        string $localeName
    ): array;
}
