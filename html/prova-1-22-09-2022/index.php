<?php

interface Foo {
    public function bar();
}

interface Baz {
    public function bar();
}

class FooBaz implements Foo, Baz
{
    function FooBaz()
    {
        echo "FooBaz<br>";
    }

    public function bar()
    {
        echo "foo bar baz";
    }
}

$foobaz = new FooBaz();

$foobaz->bar();
