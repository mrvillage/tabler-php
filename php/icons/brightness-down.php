<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrightnessDown extends Icon {
    public static function getName(): string {
        return 'brightness-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 5l0 .01" />   <path d="M17 7l0 .01" />   <path d="M19 12l0 .01" />   <path d="M17 17l0 .01" />   <path d="M12 19l0 .01" />   <path d="M7 17l0 .01" />   <path d="M5 12l0 .01" />   <path d="M7 7l0 .01" />
        SVG;
    }
}