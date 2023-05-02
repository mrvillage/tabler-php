<?php
require_once('../Icon.php');

class IconChartArea extends Icon {
    public static function getName(): string {
        return 'chart-area';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19l16 0" />   <path d="M4 15l4 -6l4 2l4 -5l4 4l0 5l-16 0" />
        SVG;
    }
}