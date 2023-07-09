<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ArchitectureSniffer\PropelQuery\Schema\Transfer;

use ArchitectureSniffer\Transfer\TransferInterface;

class PropelSchemaTableRelationTransfer implements TransferInterface
{
    /**
     * @var string
     */
    protected $tableName;

    /**
     * @var string
     */
    protected $phpName;

    /**
     * @var string
     */
    protected $refPhpName;

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     *
     * @return void
     */
    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return string|null
     */
    public function getPhpName(): ?string
    {
        return $this->phpName;
    }

    /**
     * @param string $phpName
     *
     * @return void
     */
    public function setPhpName(string $phpName): void
    {
        $this->phpName = $phpName;
    }

    /**
     * @return string|null
     */
    public function getRefPhpName(): ?string
    {
        return $this->refPhpName;
    }

    /**
     * @param string $refPhpName
     *
     * @return void
     */
    public function setRefPhpName(string $refPhpName): void
    {
        $this->refPhpName = $refPhpName;
    }
}
