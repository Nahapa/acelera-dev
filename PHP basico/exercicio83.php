<?php

interface Professional
{
    public function work();
}

class company
{
    public function createSoftware(Professional $professional)
    {
        $professional->work();
    }
}

class Designer implements Professional
{
    public function work()
    {
        $this->designArchitectura();
    }

    public function designArchitectura()
    {
    }
}

class Programmer implements Professional
{
    public function work()
    {
        $this->writeCode();
    }

    public function writeCode()
    {
    }
}

class Tester implements Professional
{
    public function work()
    {
        $this->testSoftware();
    }

    public function testSoftware()
    {
    }
}
