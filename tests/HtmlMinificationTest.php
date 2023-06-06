<?php

declare(strict_types=1);

namespace Rjorel\LaravelSpacelessBlade\Tests;

use PHPUnit\Framework\Attributes\Test;

class HtmlMinificationTest extends TestCase
{
    #[Test]
    public function it_minifies_html_content()
    {
        $minifiedHtml = minify_html(<<<EOL
Some useless content  with 2 spaces  between some words.
<tag-1>   </tag-1>   <tag-2 />
 <tag-3>
    New lines in

    tag contents


    are
    preserved.
 </tag-3>
 <tag-4 />
 <tag-5 />     Other content.
<script>
    const myVar = 0;
    console.log(myVar);
    alert(myVar);
</script>
EOL
        );

        $this->assertEquals(<<<EOL
Some useless content with 2 spaces between some words. <tag-1></tag-1><tag-2 /><tag-3> New lines in

 tag contents


 are
 preserved. </tag-3><tag-4 /><tag-5 /> Other content. <script> const myVar = 0;
 console.log(myVar);
 alert(myVar); </script>
EOL,

            $minifiedHtml
        );
    }
}
