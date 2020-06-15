<?php

namespace srag\RemovePluginDataConfirm;

/**
 * Trait PluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait PluginUninstallTrait
{

    use BasePluginUninstallTrait;

    /**
     * @inheritDoc
     */
    public function updateDatabase()
    {
        if ($this->shouldUseOneUpdateStepOnly()) {
            $this->writeDBVersion(0);
        }

        return parent::updateDatabase();
    }


    /**
     * @internal
     */
    protected final function afterUninstall()/*: void*/
    {

    }


    /**
     * @return bool
     *
     * @internal
     */
    protected final function beforeUninstall() : bool
    {
        return $this->pluginUninstall();
    }


    /**
     * @return bool
     */
    protected abstract function shouldUseOneUpdateStepOnly() : bool;
}
