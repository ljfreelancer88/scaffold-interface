<?php

namespace Amranidev\ScaffoldInterface\Generators;

use Amranidev\ScaffoldInterface\DataSystem\DataSystem;
use Amranidev\ScaffoldInterface\Generators\NamesGenerate;

/**
 * Class MigrationGenerate
 *
 * @package scaffold-interface/Generators
 * @author Amrani Houssian <amranidev@gmail.com>
 */
class MigrationGenerate
{

    /**
     * DataSystem instance
     *
     * @var $dataSystem
     */
    private $dataSystem;

    /**
     * NamesGenerate instance
     *
     * @var NamesGenerate
     */
    private $names;

    /**
     * Create New MigrationGenerate instance
     *
     * @param DataSystem
     * @param NamesGenerate
     */
    public function __construct(DataSystem $dataSystem, NamesGenerate $names)
    {
        $this->dataSystem = $dataSystem;
        $this->names = $names;
    }

    /**
     * fetch migration template
     *
     * @return String
     */
    public function generate()
    {
        return "<?php\n\n" . view('scaffold-interface::template.migration.migration', ['names' => $this->names, 'dataSystem' => $this->dataSystem])->render();
    }

}
