<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconListCheck extends \Tabler\Icon {
    public static function getName(): string {
        return 'list-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />   <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />   <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />   <path d="M11 6l9 0" />   <path d="M11 12l9 0" />   <path d="M11 18l9 0" />
        SVG;
    }
}