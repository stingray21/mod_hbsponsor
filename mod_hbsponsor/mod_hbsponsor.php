<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     Jochen Stehle <stingray21@gmx.de>
 * @copyright  
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;



$document = JFactory::getDocument();

$document->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
$document->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
$document->addStyleSheet('media/mod_hbsponsor/css/style.css');
$document->addScript('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
$document->addScript('media/mod_hbsponsor/js/hbsponsor.js');
	

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_hbsponsor', $params->get('layout', 'default'));
?>
