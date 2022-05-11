<?php

namespace Welcome\Welcomemodule\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class CreateDefaultBrands implements DataPatchInterface
{

    private $moduleDataSetup;
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }
    public static function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [];
    }

    public function getAliases()
    {
        // TODO: Implement getAliases() method.
        return [];
    }

    public function apply()
    {
        // TODO: Implement apply() method.
        $test_data = [
            ['id_column' => 1, 'severity' => 111, 'title' => 'test1', 'desc' => 'description1'],
            ['id_column' => 2, 'severity' => 222, 'title' => 'test2', 'desc' => 'description2'],
            ['id_column' => 3, 'severity' => 333, 'title' => 'test3', 'desc' => 'description3'],
            ['id_column' => 4, 'severity' => 444, 'title' => 'test4', 'desc' => 'description4'],
            ['id_column' => 5, 'severity' => 555, 'title' => 'test5', 'desc' => 'description5']
        ];

        for ($i = 0; $i < count($test_data); $i++) {
            $this->moduleDataSetup->getConnection()->insertMultiple('test_table', $test_data[$i]);
        }
    }
}
