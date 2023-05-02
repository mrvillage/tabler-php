<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowGuide extends Icon {
    public static function getName(): string {
        return 'arrow-guide';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 19h3a2 2 0 0 0 2 -2v-8a2 2 0 0 1 2 -2h7" />   <path d="M18 4l3 3l-3 3" />
        SVG;
    }
}