<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHome2 extends Icon {
    public static function getName(): string {
        return 'home-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12l-2 0l9 -9l9 9l-2 0" />   <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />   <path d="M10 12h4v4h-4z" />
        SVG;
    }
}