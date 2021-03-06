<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Site;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * ### Site: URL
 *
 * Returns the website URL as returned by
 * `\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL')`
 *
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 * @subpackage ViewHelpers\Site
 */
class UrlViewHelper extends AbstractViewHelper {

	/**
	 * @return string
	 */
	public function render() {
		$url = GeneralUtility::getIndpEnv('TYPO3_SITE_URL');
		return $url;
	}

}
