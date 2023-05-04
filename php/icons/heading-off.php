<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeadingOff extends Tabler\Icon {
    public static function getName(): string {
        return 'heading-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12h5m4 0h1" />   <path d="M7 7v12" />   <path d="M17 5v8m0 4v2" />   <path d="M15 19h4" />   <path d="M15 5h4" />   <path d="M5 19h4" />   <path d="M3 3l18 18" />
        SVG;
    }
}