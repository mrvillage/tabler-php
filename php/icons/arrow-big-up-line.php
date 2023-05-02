<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowBigUpLine extends Icon {
    public static function getName(): string {
        return 'arrow-big-up-line';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 12h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v6h-6v-6z" />   <path d="M9 21h6" />
        SVG;
    }
}