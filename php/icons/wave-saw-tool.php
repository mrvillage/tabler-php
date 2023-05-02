<?php
require_once(__DIR__ . '../Icon.php');

class IconWaveSawTool extends Icon {
    public static function getName(): string {
        return 'wave-saw-tool';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h5l4 8v-16l4 8h5" />
        SVG;
    }
}