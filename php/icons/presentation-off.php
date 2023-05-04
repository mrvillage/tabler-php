<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPresentationOff extends Tabler\Icon {
    public static function getName(): string {
        return 'presentation-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4h1m4 0h13" />   <path d="M4 4v10a2 2 0 0 0 2 2h10m3.42 -.592c.359 -.362 .58 -.859 .58 -1.408v-10" />   <path d="M12 16v4" />   <path d="M9 20h6" />   <path d="M8 12l2 -2m4 0l2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}