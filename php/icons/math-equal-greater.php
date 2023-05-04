<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathEqualGreater extends Tabler\Icon {
    public static function getName(): string {
        return 'math-equal-greater';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 18l14 -4" />   <path d="M5 14l14 -4l-14 -4" />
        SVG;
    }
}