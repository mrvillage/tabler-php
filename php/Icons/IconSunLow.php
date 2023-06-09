<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSunLow extends \Tabler\Icon {
    public static function getName(): string {
        return 'sun-low';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M4 12h.01" />   <path d="M12 4v.01" />   <path d="M20 12h.01" />   <path d="M12 20v.01" />   <path d="M6.31 6.31l-.01 -.01" />   <path d="M17.71 6.31l-.01 -.01" />   <path d="M17.7 17.7l.01 .01" />   <path d="M6.3 17.7l.01 .01" />
        SVG;
    }
}