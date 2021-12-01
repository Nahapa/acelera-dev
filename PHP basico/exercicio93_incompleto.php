<?php

class PasswordGenerator
{
    private $upperIncluded;
    private $lowerIncluded;
    private $digitIncluded;
    private $punctuationIncluded;
    private $ambiguousExcluded;
    private $minUpper;
    private $minLower;
    private $minDigits;
    private $minPunctuation;

    public function upperIncluded(bool $upperIncluded = true)
    {
        $this->upperIncluded = $upperIncluded;
        return $this;
    }

    public function lowerIncluded(bool $lowerIncluded = true)
    {
        $this->lowerIncluded = $lowerIncluded;
        return $this;
    }

    public function digitIncluded(bool $digitIncluded = true)
    {
        $this->digitIncluded = $digitIncluded;
        return $this;
    }

    public function punctuationIncluded(bool $punctuationIncluded = true)
    {
        $this->punctuationIncluded = $punctuationIncluded;
        return $this;
    }

    public function ambiguousExcluded(bool $ambiguousExcluded = true)
    {
        $this->ambiguousExcluded = $ambiguousExcluded;
        return $this;
    }

    public function minUpper(int $minUpper = 0)
    {
        $this->minUpper = $minUpper;
        return $this;
    }

    public function minLower(int $minLower = 0)
    {
        $this->minLower = $minLower;
        return $this;
    }

    public function minDigits(int $minDigits = 0)
    {
        $this->minDigits = $minDigits;
        return $this;
    }

    public function minPunctuation(int $minPunctuation = 0)
    {
        $this->minPunctuation = $minPunctuation;
        return $this;
    }
}
