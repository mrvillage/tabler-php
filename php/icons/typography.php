<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTypography extends Tabler\Icon {
    public static function getName(): string {
        return 'typography';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20l3 0" />   <path d="M14 20l7 0" />   <path d="M6.9 15l6.9 0" />   <path d="M10.2 6.3l5.8 13.7" />   <path d="M5 20l6 -16l2 0l7 16" />
        SVG;
    }
}