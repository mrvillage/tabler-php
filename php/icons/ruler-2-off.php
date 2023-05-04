<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRuler2Off extends Tabler\Icon {
    public static function getName(): string {
        return 'ruler-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.03 7.97l4.97 -4.97l4 4l-5 5m-2 2l-7 7l-4 -4l7 -7" />   <path d="M16 7l-1.5 -1.5" />   <path d="M10 13l-1.5 -1.5" />   <path d="M7 16l-1.5 -1.5" />   <path d="M3 3l18 18" />
        SVG;
    }
}