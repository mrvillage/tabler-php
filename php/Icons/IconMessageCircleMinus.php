<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageCircleMinus extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-circle-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.023 19.98a9.87 9.87 0 0 1 -4.323 -.98l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c2.718 2.319 3.473 5.832 2.096 8.811" />   <path d="M16 19h6" />
        SVG;
    }
}