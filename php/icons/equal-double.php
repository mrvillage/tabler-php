<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEqualDouble extends Tabler\Icon {
    public static function getName(): string {
        return 'equal-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10h7" />   <path d="M3 14h7" />   <path d="M14 10h7" />   <path d="M14 14h7" />
        SVG;
    }
}