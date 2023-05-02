<?php
require_once(__DIR__ . '/../Icon.php');

class IconFilterOff extends Icon {
    public static function getName(): string {
        return 'filter-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h12v2.172a2 2 0 0 1 -.586 1.414l-3.914 3.914m-.5 3.5v4l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227" />   <path d="M3 3l18 18" />
        SVG;
    }
}