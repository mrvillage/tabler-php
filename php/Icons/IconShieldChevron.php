<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShieldChevron extends \Tabler\Icon {
    public static function getName(): string {
        return 'shield-chevron';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />   <path d="M4 14l8 -3l8 3" />
        SVG;
    }
}