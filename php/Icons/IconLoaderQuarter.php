<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLoaderQuarter extends \Tabler\Icon {
    public static function getName(): string {
        return 'loader-quarter';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6l0 -3" />   <path d="M6 12l-3 0" />   <path d="M7.75 7.75l-2.15 -2.15" />
        SVG;
    }
}