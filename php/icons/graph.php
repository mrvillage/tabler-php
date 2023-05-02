<?php
require_once(__DIR__ . '../Icon.php');

class IconGraph extends Icon {
    public static function getName(): string {
        return 'graph';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M7 14l3 -3l2 2l3 -3l2 2" />
        SVG;
    }
}