<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderAgender extends \Tabler\Icon {
    public static function getName(): string {
        return 'gender-agender';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />   <path d="M7 12h11" />
        SVG;
    }
}