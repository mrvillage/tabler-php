<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBleachNoChlorine extends Tabler\Icon {
    public static function getName(): string {
        return 'bleach-no-chlorine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />   <path d="M6.576 19l7.907 -13.733" />   <path d="M11.719 19.014l5.346 -9.284" />
        SVG;
    }
}