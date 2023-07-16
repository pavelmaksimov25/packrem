<?php

namespace SprykerSdk\SprykerFeatureRemover\Transfer;

use ReflectionClass;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class TransferFinder
{
    protected const TRANSFER_NAMESPACE_PATTERN = 'Generated\Shared\Transfer\%s';

    public function __construct(private Finder $finder)
    {
    }

    public function findTransfers(string $directoryPath): Finder
    {
        $finder = clone $this->finder;
        $finder->in($directoryPath)
            ->depth(0)
            ->filter(function (SplFileInfo $fileEntry) {
                return $this->filterTransferFileEntry($fileEntry);
            });

        return $finder;
    }

    private function filterTransferFileEntry(SplFileInfo $fileEntry): bool
    {
        $filename = $fileEntry->getFilename();
        $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        $transferClassName = $this->buildFullyQualifiedTransferClassName(
            $filenameWithoutExtension,
        );

        return $this->extendsExpectedBaseClass($transferClassName);
    }

    private function buildFullyQualifiedTransferClassName(string $transferFileName): string
    {
        return sprintf(static::TRANSFER_NAMESPACE_PATTERN, $transferFileName);
    }

    private function extendsExpectedBaseClass(string $transferClassName): bool
    {
        $parentClassName = $this->getTransferParentClassName($transferClassName);

        return $parentClassName === '\Spryker\Shared\Kernel\Transfer\AbstractTransfer';
    }

    private function getTransferParentClassName(string $transferClassName): ?string
    {
        if (!class_exists($transferClassName)) {
            return null;
        }

        $reflectionClass = new ReflectionClass($transferClassName);
        $parentClass = $reflectionClass->getParentClass();

        return $parentClass ? $parentClass->getName() : null;
    }
}
