<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowDownLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-down-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 7l-10 10" />   <path d="M16 17l-9 0l0 -9" />
        SVG;
    }
}