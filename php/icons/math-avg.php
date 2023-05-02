<?php
require_once('../Icon.php');

class IconMathAvg extends Icon {
    public static function getName(): string {
        return 'math-avg';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 -18" />   <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
        SVG;
    }
}