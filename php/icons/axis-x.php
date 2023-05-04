<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAxisX extends Tabler\Icon {
    public static function getName(): string {
        return 'axis-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 13v.01" />   <path d="M4 9v.01" />   <path d="M4 5v.01" />   <path d="M17 20l3 -3l-3 -3" />   <path d="M4 17h16" />
        SVG;
    }
}