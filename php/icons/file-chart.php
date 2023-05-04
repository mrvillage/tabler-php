<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileChart extends Icon {
    public static function getName(): string {
        return 'file-chart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />   <path d="M12 10v4h4" />   <path d="M12 14m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
        SVG;
    }
}