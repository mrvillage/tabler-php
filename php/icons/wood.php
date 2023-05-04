<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWood extends Icon {
    public static function getName(): string {
        return 'wood';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5.5m-6 0a6 2.5 0 1 0 12 0a6 2.5 0 1 0 -12 0" />   <path d="M18 5.5v4.626a1.415 1.415 0 0 1 1.683 2.18l-.097 .108l-1.586 1.586v4c0 1.61 -2.54 2.925 -5.725 3l-.275 0c-3.314 0 -6 -1.343 -6 -3v-2l-1.586 -1.586a1.414 1.414 0 0 1 1.586 -2.287v-6.627" />   <path d="M10 12.5v1.5" />   <path d="M14 16v1" />
        SVG;
    }
}