<?php
declare(strict_types=1);

namespace Survos\BootstrapBundle\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent(
    name: 'tabler:footer',
    template: '@SurvosBootstrap/components/tabler/footer.html.twig'
)]
final class TablerFooter
{
    /** Year; null => use Twig "now"|date("Y") */
    public ?int $year = null;

    /** App/site label */
    public string $appName = 'My App';

    /**
     * Footer links: label => URL
     * @var array<string,string>
     */
    public array $links = [
        'Documentation' => 'https://example.com/docs',
        'License'       => '#',
    ];

    /** Show a props dump card for bring-up */
    public bool $debug = false;
}
