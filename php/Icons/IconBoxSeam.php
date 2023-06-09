<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxSeam extends \Tabler\Icon {
    public static function getName(): string {
        return 'box-seam';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />   <path d="M12 12l8 -4.5" />   <path d="M8.2 9.8l7.6 -4.6" />   <path d="M12 12v9" />   <path d="M12 12l-8 -4.5" />
        SVG;
    }
}