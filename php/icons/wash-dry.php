<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWashDry extends Tabler\Icon {
    public static function getName(): string {
        return 'wash-dry';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
        SVG;
    }
}