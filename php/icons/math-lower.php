<?php
require_once(__DIR__ . '/../Icon.php');

class IconMathLower extends Icon {
    public static function getName(): string {
        return 'math-lower';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 18l-14 -6l14 -6" />
        SVG;
    }
}