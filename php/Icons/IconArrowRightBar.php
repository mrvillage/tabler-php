<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRightBar extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-right-bar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 15l3 -3l-3 -3" />   <path d="M3 12h18" />   <path d="M3 9v6" />
        SVG;
    }
}