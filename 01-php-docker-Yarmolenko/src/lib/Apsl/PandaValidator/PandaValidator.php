<?php

namespace Apsl\Validator;

class PandaValidator{
    public function isValidText(string $text): bool
    {
        if($text == "panda")
            return true;
        else
            return false;
    }

    public function isValidGrade($grade): bool
    {
        if($grade == 3)
            return true;
        else
            return false;
    }
}