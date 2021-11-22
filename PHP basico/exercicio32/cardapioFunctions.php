<?php

function validaCategoria($itens)
{
    if (count($itens) < 3) {
        return -1;
    } else if (count($itens) > 6) {
        return 1;
    }

    return 0;
}
