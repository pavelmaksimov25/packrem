<?php

namespace SprykerSdk\SprykerFeatureRemover\Dto;

class ActionDto
{
    private string $moduleName = '';
    private array $errorMessages = [];

    public function getModuleName(): string
    {
        return $this->moduleName;
    }

    public function setModuleName(string $moduleName): void
    {
        $this->moduleName = $moduleName;
    }

    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }

    public function addErrorMessage(string $errorMessage): void
    {
        $this->errorMessages[] = $errorMessage;
    }
}