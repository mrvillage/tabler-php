<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTopologyStar2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'topology-star-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 20a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M14 4a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M22 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M14 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 12h4" />   <path d="M14 12h4" />   <path d="M12 6v4" />   <path d="M12 14v4" />
        SVG;
    }
}