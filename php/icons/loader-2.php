<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLoader2 extends Tabler\Icon {
    public static function getName(): string {
        return 'loader-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a9 9 0 1 0 9 9" />
        SVG;
    }
}