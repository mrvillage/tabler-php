<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowNarrowUp extends Icon {
    public static function getName(): string {
        return 'arrow-narrow-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5l0 14" />   <path d="M16 9l-4 -4" />   <path d="M8 9l4 -4" />
        SVG;
    }
}