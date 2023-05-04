<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFireHydrantOff extends Tabler\Icon {
    public static function getName(): string {
        return 'fire-hydrant-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 21h14" />   <path d="M17 21v-4m2 -2v-2a1 1 0 0 0 -1 -1h-1v-4a5 5 0 0 0 -8.533 -3.538m-1.387 2.638a5.03 5.03 0 0 0 -.08 .9v4h-1a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h1v5" />   <path d="M12 12a2 2 0 1 0 2 2" />   <path d="M6 8h2m4 0h6" />   <path d="M3 3l18 18" />
        SVG;
    }
}