<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconStairs extends \Tabler\Icon {
    public static function getName(): string {
        return 'stairs';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18h4v-4h4v-4h4v-4h4" />
        SVG;
    }
}