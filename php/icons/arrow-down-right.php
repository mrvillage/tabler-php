<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowDownRight extends Icon {
    public static function getName(): string {
        return 'arrow-down-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 7l10 10" />   <path d="M17 8l0 9l-9 0" />
        SVG;
    }
}