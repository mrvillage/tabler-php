<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleNumber0 extends Icon {
    public static function getName(): string {
        return 'circle-number-0';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10 10v4a2 2 0 1 0 4 0v-4a2 2 0 1 0 -4 0z" />
        SVG;
    }
}