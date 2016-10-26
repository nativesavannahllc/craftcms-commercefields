<?php
namespace Craft;

/**
 * Commerce Fields Plugin
 *
 * @author     Native Savannah, LLC <dev@nativesavannah.com>
 * @copyright  Copyright (c) 2016, Native Savannah, LLC
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @see        https://github.com/nativesavannahllc/craftcms-commercefields
 * @package    commercefields
 * @version    1.0
 */
class CommerceFieldsPlugin extends BasePlugin
{
	/**
	 * @access    public
	 * @return    string
	 */
	public function getName()
	{
		return Craft::t('Commerce Fields');
	}

	/**
	 * @access    public
	 * @return    string
	 */
	public function getVersion()
	{
		return '1.0';
	}

	/**
	 * @access    public
	 * @return    string
	 */
	public function getDeveloper()
	{
		return 'Native Savannah, LLC';
	}

	/**
	 * @access    public
	 * @return    string
	 */
	public function getDeveloperUrl()
	{
		return 'http://nslabs.co';
	}

	/**
	 * @access    public
	 * @return    string
	 */
	public function getDocumentationUrl() {
		return 'https://github.com/nativesavannahllc/craftcms-commercefields/blob/master/readme.md';
	}

	/**
	 * @access    public
	 * @return    string
	 */
	public function getReleaseFeedUrl() {
		return 'https://raw.githubusercontent.com/nativesavannahllc/craftcms-commercefields/master/changelog.json';
	}

	/**
	 * @access    public
	 * @return    bool
	 */
	public function hasCpSection()
	{
		return false;
	}

}