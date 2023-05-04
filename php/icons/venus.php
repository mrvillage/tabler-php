<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVenus extends Tabler\Icon {
    public static function getName(): string {
        return 'venus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M12 14l0 7" />   <path d="M9 18l6 0" />
        SVG;
    }
}