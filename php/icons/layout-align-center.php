<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLayoutAlignCenter extends \Tabler\Icon {
    public static function getName(): string {
        return 'layout-align-center';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4l0 5" />   <path d="M12 15l0 5" />   <path d="M6 9m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}