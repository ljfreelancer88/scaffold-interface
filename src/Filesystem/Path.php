<?php

namespace Amranidev\ScaffoldInterface\Filesystem;

use Amranidev\ScaffoldInterface\Generators\NamesGenerate;

/**
 * Class Paths
 *
 * @package scaffold-interface/FileSystem
 * @author Amrani Houssain <amranidev@gmail.com>
 */
class Path
{
    /**
     * The NamesGenerate instance
     */
    public $names;

    /**
     * @var String $migrationPath
     */
    public $migrationPath;

    /**
     * Create new Paths instance
     *
     * @param NamesGenerate names
     */
    public function __construct(NamesGenerate $names)
    {
        $this->names = $names;

        $this->migrationPath = $this->MigrationPath();
    }

    /**
     * return model file path
     *
     * @return String
     */
    public function modelPath()
    {
        return config('amranidev.config.model') .'/'. $this->names->TableName() . '.php';
    }

    /**
     * return migration file path
     *
     * @return String
     */
    private function migrationPath()
    {
        $FileName = date('Y') . '_' . date('m') . '_' . date('d') . '_' . date('his') . '_' . $this->names->TableNames() . ".php";
        return config('amranidev.config.migration') .'/'. $FileName;
    }

    /**
     * return controller file path
     *
     * @return String
     */
    public function controllerPath()
    {
        $FileName = $this->names->TableName() . "Controller.php";
        
        return config('amranidev.config.controller') .'/'. $FileName;
    }

    /**
     * retrun index file path
     *
     * @return String
     */
    public function indexPath()
    {
        return config('amranidev.config.views') .'/'. $this->names->TableNameSingle() .'/'. 'index.blade.php';
    }

    /**
     * return create file path
     *
     * @return String
     */
    public function createPath()
    {
        return config('amranidev.config.views') .'/'. $this->names->TableNameSingle() .'/'. 'create.blade.php';
    }

    /**
     * return show file path
     *
     * @return String
     */
    public function showPath()
    {
        return config('amranidev.config.views') .'/'. $this->names->TableNameSingle() .'/'. 'show.blade.php';
    }

    /**
     * return edit file path
     *
     * @return String
     */
    public function editPath()
    {
        return config('amranidev.config.views') .'/'. $this->names->TableNameSingle() .'/'. 'edit.blade.php';
    }

    /**
     * return route file path
     *
     * @return String
     */
    public function routePath()
    {
        return config('amranidev.config.routes');
    }

    /**
     * return views directory path
     *
     * @return String
     */
    public function dirPath()
    {
        return config('amranidev.config.views') .'/'. $this->names->TableNameSingle();
    }
}
