<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLayoutAlignMiddle extends \Tabler\Icon {
    public static function getName(): string {
        return 'layout-align-middle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12l5 0" />   <path d="M15 12l5 0" />   <path d="M9 6m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}