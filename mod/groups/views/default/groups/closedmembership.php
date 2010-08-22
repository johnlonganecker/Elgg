<?php
	/**
	 * Elgg groups plugin full profile view (for a closed group you haven't joined).
	 * 
	 * @package ElggGroups
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider
	 * @copyright Curverider Ltd 2008-2010
	 * @link http://elgg.com/
	 */

?>
<p class="margin_top">
<?php 
echo elgg_echo('groups:closedgroup');
if (isloggedin()) {
	echo ' ' . elgg_echo('groups:closedgroup:request');
}
?>
</p>
