<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNumbers extends \Tabler\Icon {
    public static function getName(): string {
        return 'numbers';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 10v-7l-2 2" />   <path d="M6 16a2 2 0 1 1 4 0c0 .591 -.601 1.46 -1 2l-3 3h4" />   <path d="M15 14a2 2 0 1 0 2 -2a2 2 0 1 0 -2 -2" />   <path d="M6.5 10h3" />
        SVG;
    }
}