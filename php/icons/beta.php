<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBeta extends Tabler\Icon {
    public static function getName(): string {
        return 'beta';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 22v-14a4 4 0 0 1 4 -4h.5a3.5 3.5 0 0 1 0 7h-.5h.5a4.5 4.5 0 1 1 -4.5 4.5v-.5" />
        SVG;
    }
}