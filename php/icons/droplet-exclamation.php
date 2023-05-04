<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDropletExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'droplet-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.602 12.004a6.66 6.66 0 0 0 -.538 -1.127l-4.89 -7.26c-.42 -.625 -1.287 -.803 -1.936 -.397a1.376 1.376 0 0 0 -.41 .397l-4.893 7.26c-1.695 2.838 -1.035 6.441 1.567 8.546c2.142 1.734 5.092 2.04 7.519 .919" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}