<?php

namespace App\Controllers;

class Color extends BaseController
{
    public function submitPattern()
    {
        $redValue = $this->request->getVar('redValue');
        $greenValue = $this->request->getVar('greenValue');
        $blueValue = $this->request->getVar('blueValue');
        $blackValue = $this->request->getVar('blackValue');
        $whiteValue = $this->request->getVar('whiteValue');
        return $redValue . $greenValue . $blueValue . $blackValue . $whiteValue;
    }

    public function getRecipe()
    {
        $targetLValue = $this->request->getVar('targetLValue');
        $targetAValue = $this->request->getVar('targetAValue');
        $targetBValue = $this->request->getVar('targetBValue');
        return $targetLValue . $targetAValue . $targetBValue;
    }
}
