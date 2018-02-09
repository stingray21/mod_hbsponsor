<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     Jochen Stehle <stingray21@gmx.de>
 * @copyright  
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       
 */

defined('_JEXEC') or die;


// JHtml::_('stylesheet', 'mod_languages/template.css', array('version' => 'auto', 'relative' => true));

// Access to module parameters
$width = $params->get('width', 240);
$height = $params->get('height', 100);

$ad_data = $params->get('ad_json', '[ { "url": "https://www.hkog.de" , "alt": "HKOG" } ]');

// echo __FILE__.' ('.__LINE__.'):<pre>';print_r($ad_data);echo'</pre>';
$ads = json_decode($ad_data);
// echo __FILE__.' ('.__LINE__.'):<pre>';print_r($ads);echo'</pre>';die;

?>


	<div id="hbsponsor">
		<?php foreach ($ads as $i => $ad) : ?>
		<div>
			<div class="adbox" >
				<a href="<?php echo $ad->url?>"  target="_BLANK" alt="<?php echo $ad->alt?>">
					<span class="ad" style="background-position: <?php echo -$i*240?>px 0; width: <?php echo $width?>px; height: <?php echo $height?>px;"><?php echo $ad->alt?></span>
				</a>
			</div>
		</div>
		<?php endforeach ?>
	</div>

	<hr>
