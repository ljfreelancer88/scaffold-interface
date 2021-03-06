<?php

namespace Amranidev\ScaffoldInterface\Generators;

use Amranidev\ScaffoldInterface\DataSystem\DataSystem;
use Amranidev\ScaffoldInterface\Generators\NamesGenerate;

/**
 * Class ModelGenerate
 *
 * @package scaffold-interface/Generators
 * @author Amrani Houssian <amranidev@gmail.com>
 */
class ModelGenerate
{
    /**
     * DataSystem
     * 
     * @var $dataSystem
     */ 
    private $dataSystem;

    /**
     * @var NamesGenerate
     */
    private $names;

    /**
     * Create new ModelGenerate instance
     *
     * @param NameGenerate
     */
    public function __construct(NamesGenerate $names, DataSystem $dataSystem)
    {
        $this->names = $names;
        $this->dataSystem = $dataSystem;
    }

    /**
     * Compile Model template
     *
     * @return String
     */
    public function generate()
    {
        return "<?php\n\n" . view('scaffold-interface::template.model.model', ['names' => $this->names, 'foreignKeys' => $this->dataSystem->getForeignKeys()])->render();
    }
}
