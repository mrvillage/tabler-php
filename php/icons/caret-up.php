<?php
require_once(__DIR__ . '../Icon.php');

class IconCaretUp extends Icon {
    public static function getName(): string {
        return 'caret-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 14l-6 -6l-6 6h12" />
        SVG;
    }
}