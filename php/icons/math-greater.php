<?php
require_once('../Icon.php');

class IconMathGreater extends Icon {
    public static function getName(): string {
        return 'math-greater';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 18l14 -6l-14 -6" />
        SVG;
    }
}