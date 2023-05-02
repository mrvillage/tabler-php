<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleCaretLeft extends Icon {
    public static function getName(): string {
        return 'circle-caret-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 12l4 -4v8z" />   <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />
        SVG;
    }
}