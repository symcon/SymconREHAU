<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class SymconREHAUValidationTest extends TestCaseSymconValidation
{
    public function testValidateSymconREHAU(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateNEAsmartModule(): void
    {
        $this->validateModule(__DIR__ . '/../NEAsmart');
    }
}