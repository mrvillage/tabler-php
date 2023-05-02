<?php
require_once(__DIR__ . '../Icon.php');

class IconCaretRight extends Icon {
    public static function getName(): string {
        return 'caret-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 18l6 -6l-6 -6v12" />
        SVG;
    }
}