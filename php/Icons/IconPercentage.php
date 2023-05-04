<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPercentage extends \Tabler\Icon {
    public static function getName(): string {
        return 'percentage';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 17m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 7m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M6 18l12 -12" />
        SVG;
    }
}