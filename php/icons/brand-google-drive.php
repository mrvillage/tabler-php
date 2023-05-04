<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandGoogleDrive extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-google-drive';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10l-6 10l-3 -5l6 -10z" />   <path d="M9 15h12l-3 5h-12" />   <path d="M15 15l-6 -10h6l6 10z" />
        SVG;
    }
}