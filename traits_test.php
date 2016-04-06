<?php

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
    public function code()
    {
        echo 'I can code';
    }
}

class Tester extends Human
{
    public function test()
    {
        echo 'I can code';
    }
}

Human::canDo();
Developer::canDo();
Tester::canDo();
