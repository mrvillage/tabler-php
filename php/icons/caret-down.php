<?php
require_once(__DIR__ . '../Icon.php');

class IconCaretDown extends Icon {
    public static function getName(): string {
        return 'caret-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 10l6 6l6 -6h-12" />
        SVG;
    }
}