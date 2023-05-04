<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconStarHalf extends \Tabler\Icon {
    public static function getName(): string {
        return 'star-half';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253z" />
        SVG;
    }
}