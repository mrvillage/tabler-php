<?php
require_once(__DIR__ . '/../Icon.php');

class IconChevronDownRight extends Icon {
    public static function getName(): string {
        return 'chevron-down-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 8v8h-8" />
        SVG;
    }
}