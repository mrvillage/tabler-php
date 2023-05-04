<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathEqualLower extends Icon {
    public static function getName(): string {
        return 'math-equal-lower';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 18l-14 -4" />   <path d="M19 14l-14 -4l14 -4" />
        SVG;
    }
}