<?php

function my_autoload($pClassName)
{
    include('Classes/' . $pClassName . ".php");
}
spl_autoload_register("my_autoload");
