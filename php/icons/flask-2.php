<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlask2 extends Tabler\Icon {
    public static function getName(): string {
        return 'flask-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.1 15h11.8" />   <path d="M14 3v7.342a6 6 0 0 1 1.318 10.658h-6.635a6 6 0 0 1 1.317 -10.66v-7.34h4z" />   <path d="M9 3h6" />
        SVG;
    }
}