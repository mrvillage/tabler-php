<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBigUpLines extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-big-up-lines';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 12h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v3h-6v-3z" />   <path d="M9 21h6" />   <path d="M9 18h6" />
        SVG;
    }
}