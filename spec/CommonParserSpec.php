<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommonParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CommonParser');
    }

    function it_parse_something()
    {
        $this->parse()->shouldReturn([]);
    }
}
