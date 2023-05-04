<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMath1Divide3 extends Tabler\Icon {
    public static function getName(): string {
        return 'math-1-divide-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 15.5a.5 .5 0 0 1 .5 -.5h2a1.5 1.5 0 0 1 0 3h-1.167h1.167a1.5 1.5 0 0 1 0 3h-2a.5 .5 0 0 1 -.5 -.5" />   <path d="M5 12h14" />   <path d="M10 5l2 -2v6" />
        SVG;
    }
}