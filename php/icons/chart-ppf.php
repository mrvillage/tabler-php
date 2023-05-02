<?php
require_once('../Icon.php');

class IconChartPpf extends Icon {
    public static function getName(): string {
        return 'chart-ppf';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 17c0 -6.075 -5.373 -11 -12 -11" />   <path d="M3 3v18h18" />
        SVG;
    }
}