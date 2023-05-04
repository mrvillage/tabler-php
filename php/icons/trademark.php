<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrademark extends Tabler\Icon {
    public static function getName(): string {
        return 'trademark';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.5 9h5m-2.5 0v6" />   <path d="M13 15v-6l3 4l3 -4v6" />
        SVG;
    }
}