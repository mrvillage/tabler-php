<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAntennaBars4 extends \Tabler\Icon {
    public static function getName(): string {
        return 'antenna-bars-4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18l0 -3" />   <path d="M10 18l0 -6" />   <path d="M14 18l0 -9" />   <path d="M18 18l0 .01" />
        SVG;
    }
}