<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrident extends \Tabler\Icon {
    public static function getName(): string {
        return 'trident';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6l2 -2v3a7 7 0 0 0 14 0v-3l2 2" />   <path d="M12 21v-18l-2 2m4 0l-2 -2" />
        SVG;
    }
}