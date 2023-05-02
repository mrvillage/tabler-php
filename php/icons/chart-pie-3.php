<?php
require_once('../Icon.php');

class IconChartPie3 extends Icon {
    public static function getName(): string {
        return 'chart-pie-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12l-6.5 5.5" />   <path d="M12 3v9h9" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}