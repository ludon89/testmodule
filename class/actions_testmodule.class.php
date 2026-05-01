<?php

/**
 * \file    testmodule/class/actions_testmodule.class.php
 * \ingroup testmodule
 * \brief   Class to handle hook actions for TestModule.
 */

require_once DOL_DOCUMENT_ROOT . '/core/class/commonhookactions.class.php';

/**
 * Class to handle hook actions for TestModule.
 */
class ActionsTestModule extends CommonHookActions
{
	/**
	 * @var DoliDB Database handler.
	 */
	public $db;

	/**
	 * @var string Error code (or message)
	 */
	public $error = '';

	/**
	 * @var string[] Errors
	 */
	public $errors = array();


	/**
	 * @var mixed[] Hook results. Propagated to $hookmanager->resArray for later reuse
	 */
	public $results = array();

	/**
	 * @var ?string String displayed by executeHook() immediately after return
	 */
	public $resprints;

	/**
	 * @var int		Priority of hook (50 is used if value is not defined)
	 */
	public $priority;


	/**
	 * Constructor
	 *
	 *  @param	DoliDB	$db      Database handler
	 */
	public function __construct($db)
	{
		$this->db = $db;
	}

	/**
	 * Overload the doActions function : replacing the parent's function with the one below
	 *
	 * @param	array<string,mixed>	$parameters		Hook metadata (context, etc...)
	 * @param	CommonObject		$object			The object to process (an invoice if you are in invoice module, a propale in propale's module, etc...)
	 * @param	?string				$action			Current action (if set). Generally create or edit or null
	 * @param	HookManager			$hookmanager	Hook manager propagated to allow calling another hook
	 * @return	int									Return integer < 0 on error, 0 on success, 1 to replace standard code
	 */
	public function doActions($parameters, &$object, &$action, $hookmanager)
	{
		/**
		 * @var Conf $conf
		 * @var HookManager $hookmanager
		 * @var Societe $mysoc
		 * @var Translate $langs
		 * @var User $user
		*/
		global $conf, $user, $langs, $mysoc;
		$error = 0; // Error counter

		return 0;
	}

	public function printObjectLineTitle($parameters, &$object, &$action, $hookmanager)
	{
		/**
		 * @var Conf $conf
		 * @var HookManager $hookmanager
		 * @var Societe $mysoc
		 * @var Translate $langs
		 * @var User $user
		*/
		global $conf, $user, $langs, $mysoc;
		dol_syslog(__METHOD__ . " — Hook method called for context '" . $parameters['currentcontext'] . "'", LOG_DEBUG);

		$contextArray = $hookmanager->contextarray;

		return 0;
	}
}
