<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class Icon360 extends \Tabler\Icon {
    public static function getName(): string {
        return '360';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 15.328c2.414 -.718 4 -1.94 4 -3.328c0 -2.21 -4.03 -4 -9 -4s-9 1.79 -9 4s4.03 4 9 4" />   <path d="M9 13l3 3l-3 3" />
        SVG;
    }
}