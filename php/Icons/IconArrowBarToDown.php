<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarToDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-bar-to-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20l16 0" />   <path d="M12 14l0 -10" />   <path d="M12 14l4 -4" />   <path d="M12 14l-4 -4" />
        SVG;
    }
}