<?php

namespace App\Controllers;

use App\Models\PatternModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Color extends BaseController
{
    protected $patternModel;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $this->patternModel = new PatternModel();
    }

    public function submitPattern(): string
    {
        $redValue = $this->request->getVar('redValue');
        $yellowValue = $this->request->getVar('yellowValue');
        $blueValue = $this->request->getVar('blueValue');
        $blackValue = $this->request->getVar('blackValue');
        $whiteValue = $this->request->getVar('whiteValue');
        $LValue = $this->request->getVar('lValue');
        $AValue = $this->request->getVar('aValue');
        $BValue = $this->request->getVar('bValue');
        $data = [
            'redValue' => $redValue,
            'yellowValue' => $yellowValue,
            'blueValue' => $blueValue,
            'blackValue' => $blackValue,
            'whiteValue' => $whiteValue,
            'lValue' => $LValue,
            'aValue' => $AValue,
            'bValue' => $BValue,
        ];

        $this->patternModel->insert($data);
        return 'OJBK';
    }

    public function listPattern()
    {
        return json_encode($this->patternModel->findAll(), JSON_NUMERIC_CHECK);
    }

    public function deletePattern($id)
    {
        $this->patternModel->delete($id);
    }

    public function getRecipe(): string
    {
        $targetLValue = $this->request->getVar('targetLValue');
        $targetAValue = $this->request->getVar('targetAValue');
        $targetBValue = $this->request->getVar('targetBValue');
        return $targetLValue . $targetAValue . $targetBValue;
    }
}
