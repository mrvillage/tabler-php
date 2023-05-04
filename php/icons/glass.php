<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGlass extends \Tabler\Icon {
    public static function getName(): string {
        return 'glass';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21l8 0" />   <path d="M12 15l0 6" />   <path d="M17 3l1 7c0 3.012 -2.686 5 -6 5s-6 -1.988 -6 -5l1 -7h10z" />
        SVG;
    }
}