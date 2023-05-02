<?php
require_once(__DIR__ . '../Icon.php');

class IconNewsOff extends Icon {
    public static function getName(): string {
        return 'news-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 6h3a1 1 0 0 1 1 1v9m-.606 3.435a2 2 0 0 1 -3.394 -1.435v-2m0 -4v-7a1 1 0 0 0 -1 -1h-7m-3.735 .321a1 1 0 0 0 -.265 .679v12a3 3 0 0 0 3 3h11" />   <path d="M8 12h4" />   <path d="M8 16h4" />   <path d="M3 3l18 18" />
        SVG;
    }
}