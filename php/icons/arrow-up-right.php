<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowUpRight extends Icon {
    public static function getName(): string {
        return 'arrow-up-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 7l-10 10" />   <path d="M8 7l9 0l0 9" />
        SVG;
    }
}