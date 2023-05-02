<?php
require_once('../Icon.php');

class IconMathMax extends Icon {
    public static function getName(): string {
        return 'math-max';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M3 20c0 -8.75 4 -14 7 -14.5m4 0c3 .5 7 5.75 7 14.5" />
        SVG;
    }
}