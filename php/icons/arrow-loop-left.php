<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowLoopLeft extends Icon {
    public static function getName(): string {
        return 'arrow-loop-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21v-13a4 4 0 1 1 4 4h-13" />   <path d="M8 16l-4 -4l4 -4" />
        SVG;
    }
}