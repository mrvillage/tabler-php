<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZzzOff extends Tabler\Icon {
    public static function getName(): string {
        return 'zzz-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12h6l-6 8h6" />   <path d="M14 4h6l-5.146 6.862m1.146 1.138h4" />   <path d="M3 3l18 18" />
        SVG;
    }
}