<?php
require_once(__DIR__ . '../Icon.php');

class IconMusic extends Icon {
    public static function getName(): string {
        return 'music';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M16 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 17l0 -13l10 0l0 13" />   <path d="M9 8l10 0" />
        SVG;
    }
}