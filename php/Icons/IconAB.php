<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAB extends \Tabler\Icon {
    public static function getName(): string {
        return 'a-b';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 16v-5.5a2.5 2.5 0 0 1 5 0v5.5m0 -4h-5" />   <path d="M12 6l0 12" />   <path d="M16 16v-8h3a2 2 0 0 1 0 4h-3m3 0a2 2 0 0 1 0 4h-3" />
        SVG;
    }
}