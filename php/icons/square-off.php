<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareOff extends Icon {
    public static function getName(): string {
        return 'square-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a2 2 0 0 1 2 2v10m-.584 3.412a2 2 0 0 1 -1.416 .588h-12a2 2 0 0 1 -2 -2v-12c0 -.552 .224 -1.052 .586 -1.414" />   <path d="M3 3l18 18" />
        SVG;
    }
}