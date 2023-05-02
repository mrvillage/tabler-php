<?php
require_once(__DIR__ . '/../Icon.php');

class IconRowInsertTop extends Icon {
    public static function getName(): string {
        return 'row-insert-top';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18v-4a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M12 9v-4" />   <path d="M10 7l4 0" />
        SVG;
    }
}