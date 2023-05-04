<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxMultiple8 extends \Tabler\Icon {
    public static function getName(): string {
        return 'box-multiple-8';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M14 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M14 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
        SVG;
    }
}