<?php

declare(strict_types=1);

namespace Rjorel\LaravelSpacelessBlade\Tests;

use Illuminate\Support\Facades\Blade;
use PHPUnit\Framework\Attributes\Test;

class BladeDirectiveTest extends TestCase
{
    #[Test]
    public function it_compiles_blade_directive()
    {
        $compiledContent = Blade::compileString('@spaceless @endspaceless');

        $this->assertEquals('<?php ob_start() ?> <?php echo minify_html(ob_get_clean()); ?>', $compiledContent);
    }
}
