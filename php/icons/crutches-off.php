<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCrutchesOff extends Tabler\Icon {
    public static function getName(): string {
        return 'crutches-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.178 4.174a2 2 0 0 1 1.822 -1.174h4a2 2 0 1 1 0 4h-3" />   <path d="M11 21h2" />   <path d="M12 21v-4.092a3 3 0 0 1 .504 -1.664l.992 -1.488a3 3 0 0 0 .097 -.155m.407 -3.601v-3" />   <path d="M12 21v-4.092a3 3 0 0 0 -.504 -1.664l-.992 -1.488a3 3 0 0 1 -.504 -1.664v-2.092" />   <path d="M10 11h1" />   <path d="M3 3l18 18" />
        SVG;
    }
}