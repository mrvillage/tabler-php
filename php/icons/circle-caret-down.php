<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleCaretDown extends Icon {
    public static function getName(): string {
        return 'circle-caret-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 15l-4 -4h8z" />
        SVG;
    }
}