<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxAlignBottom extends \Tabler\Icon {
    public static function getName(): string {
        return 'box-align-bottom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 14h16v5a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1v-5z" />   <path d="M4 9v.01" />   <path d="M4 4v.01" />   <path d="M9 4v.01" />   <path d="M15 4v.01" />   <path d="M20 4v.01" />   <path d="M20 9v.01" />
        SVG;
    }
}