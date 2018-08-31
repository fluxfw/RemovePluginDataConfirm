<?php

namespace srag\RemovePluginDataConfirm;

/**
 * Trait RepositoryObjectPluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm
 */
trait RepositoryObjectPluginUninstallTrait {

	use AbstractPluginUninstallTrait;


	/**
	 * @return bool
	 * @throws RemovePluginDataConfirmException
	 */
	protected final function beforeUninstallCustom() {
		return $this->confirmUninstall();
	}


	/**
	 *
	 */
	protected final function uninstallCustom() {

	}


	/**
	 *
	 */
	protected final function afterUninstall() {

	}
}
