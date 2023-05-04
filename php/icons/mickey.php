<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMickey extends \Tabler\Icon {
    public static function getName(): string {
        return 'mickey';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.5 3a3.5 3.5 0 0 1 3.25 4.8a7.017 7.017 0 0 0 -2.424 2.1a3.5 3.5 0 1 1 -.826 -6.9z" />   <path d="M18.5 3a3.5 3.5 0 1 1 -.826 6.902a7.013 7.013 0 0 0 -2.424 -2.103a3.5 3.5 0 0 1 3.25 -4.799z" />   <path d="M12 14m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
        SVG;
    }
}