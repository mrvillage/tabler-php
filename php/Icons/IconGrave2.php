<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGrave2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'grave-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 16.17v-9.17a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3v9.171" />   <path d="M12 7v5" />   <path d="M10 9h4" />   <path d="M5 21v-2a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v2h-14z" />
        SVG;
    }
}