<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMath1Divide2 extends Icon {
    public static function getName(): string {
        return 'math-1-divide-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12h14" />   <path d="M10 15h3a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h3" />   <path d="M10 5l2 -2v6" />
        SVG;
    }
}