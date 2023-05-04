<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCertificate2Off extends Tabler\Icon {
    public static function getName(): string {
        return 'certificate-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12a3 3 0 1 0 3 3" />   <path d="M11 7h3" />   <path d="M10 18v4l2 -1l2 1v-4" />   <path d="M10 19h-2a2 2 0 0 1 -2 -2v-11m1.18 -2.825c.25 -.112 .529 -.175 .82 -.175h8a2 2 0 0 1 2 2v9m-.175 3.82a2 2 0 0 1 -1.825 1.18h-2" />   <path d="M3 3l18 18" />
        SVG;
    }
}