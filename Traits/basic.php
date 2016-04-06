<?php

trait Codable
{
    public function code()
    {
        echo 'I can code';
    }
}

trait Testable
{
    public function test()
    {
        echo 'I can test';
    }
}

class Human
{
    public function talk()
    {
        echo 'I can talk';
    }

    public static function canDo()
    {
        $message = '';

        $methods = get_class_methods(static::class);
        foreach ($methods as $method) {
            if ($method == __FUNCTION__) {
                continue;
            }
            $message .= " `$method`";
        }

        echo static::class.' can do:'.$message.PHP_EOL;
    }
}

class Developer extends Human
{
    use Codable;
}

class Tester extends Human
{
    use Testable;
}

class SuperMan extends Human
{
    use Codable, Testable;
}

Human::canDo();
Developer::canDo();
Tester::canDo();
SuperMan::canDo();
