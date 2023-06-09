<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGitPullRequest extends \Tabler\Icon {
    public static function getName(): string {
        return 'git-pull-request';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 8l0 8" />   <path d="M11 6h5a2 2 0 0 1 2 2v8" />   <path d="M14 9l-3 -3l3 -3" />
        SVG;
    }
}