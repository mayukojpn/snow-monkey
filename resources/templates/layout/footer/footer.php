<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Framework\Helper;
?>
<footer class="l-footer" role="contentinfo">
	<?php Helper::get_template_part( 'template-parts/nav/social' ); ?>
	<?php Helper::get_template_part( 'template-parts/widget-area/footer' ); ?>
	<?php Helper::get_template_part( 'template-parts/nav/footer-sub' ); ?>
	<?php Helper::get_template_part( 'template-parts/footer/copyright' ); ?>
</footer>

<?php Helper::get_template_part( 'template-parts/common/page-top' ); ?>
<?php Helper::get_template_part( 'template-parts/nav/footer-sticky' ); ?>
