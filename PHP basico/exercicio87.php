<?php

class BudgetReport
{
    private $database;

    public function open($date)
    {
    }

    public function save(Database $database)
    {
        $database->insert();
    }
}

interface Database
{
    public function conn();
    public function insert();
    public function update();
    public function delete();
}

class MySQL implements Database
{
    public function conn()
    {
    }
    public function insert()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

class PostgreSQL implements Database
{
    public function conn()
    {
    }
    public function insert()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
