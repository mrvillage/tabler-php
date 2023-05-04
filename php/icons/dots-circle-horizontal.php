<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDotsCircleHorizontal extends Icon {
    public static function getName(): string {
        return 'dots-circle-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M8 12l0 .01" />   <path d="M12 12l0 .01" />   <path d="M16 12l0 .01" />
        SVG;
    }
}