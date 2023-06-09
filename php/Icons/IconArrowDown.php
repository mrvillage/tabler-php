<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5l0 14" />   <path d="M18 13l-6 6" />   <path d="M6 13l6 6" />
        SVG;
    }
}