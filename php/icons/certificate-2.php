<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCertificate2 extends Tabler\Icon {
    public static function getName(): string {
        return 'certificate-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M10 7h4" />   <path d="M10 18v4l2 -1l2 1v-4" />   <path d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2" />
        SVG;
    }
}