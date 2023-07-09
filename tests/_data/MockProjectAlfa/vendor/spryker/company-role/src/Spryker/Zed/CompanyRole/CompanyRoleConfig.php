<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyRole;

use Generated\Shared\Transfer\CompanyRoleTransfer;
use Generated\Shared\Transfer\PermissionCollectionTransfer;
use Generated\Shared\Transfer\PermissionTransfer;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class CompanyRoleConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    protected const DEFAULT_ADMIN_ROLE_NAME = 'Administrator';

    /**
     * @api
     *
     * @return string
     */
    public function getDefaultAdminRoleName(): string
    {
        return static::DEFAULT_ADMIN_ROLE_NAME;
    }

    /**
     * @api
     *
     * @return array<string>
     */
    public function getAdminRolePermissionKeys(): array
    {
        return [];
    }

    /**
     * @api
     *
     * @return array<\Generated\Shared\Transfer\CompanyRoleTransfer>
     */
    public function getPredefinedCompanyRoles(): array
    {
        return [
            $this->getAdminRole(),
        ];
    }

    /**
     * @return \Generated\Shared\Transfer\CompanyRoleTransfer
     */
    protected function getAdminRole(): CompanyRoleTransfer
    {
        return (new CompanyRoleTransfer())
            ->setName(static::DEFAULT_ADMIN_ROLE_NAME)
            ->setIsDefault(true)
            ->setPermissionCollection($this->createPermissionCollectionFromPermissionKeys(
                $this->getAdminRolePermissionKeys(),
            ));
    }

    /**
     * @param array<string> $permissionKeys
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer
     */
    protected function createPermissionCollectionFromPermissionKeys(array $permissionKeys): PermissionCollectionTransfer
    {
        $permissions = new PermissionCollectionTransfer();

        foreach ($permissionKeys as $permissionKey) {
            $permission = (new PermissionTransfer())
                ->setKey($permissionKey);

            $permissions->addPermission($permission);
        }

        return $permissions;
    }
}
