<?php

//

interface CompressFile
{
}

class File
{
    private int $size;

    public function zip()
    {
    }
}

class Image
{
    private int $width;
    private int $height;
}

class Audio
{
    private string $codec;
    private string $duration;
}

class Text
{
    private int $fontSize;
}
