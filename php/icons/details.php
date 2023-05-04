<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDetails extends Icon {
    public static function getName(): string {
        return 'details';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />   <path d="M12 3v16" />
        SVG;
    }
}