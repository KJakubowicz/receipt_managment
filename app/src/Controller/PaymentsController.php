<?php

namespace App\Controller;

use App\Controller\ApiController;
use App\Repository\PaymentsRepository;
use App\Parser\PaymentsParser;
use App\Helper\ResponseHelper;
use App\Fabricator\ResponseFabricator;

class PaymentsController extends ApiController
{
    private object $responseHelper;
    private object $repository;
    private object $responseFabricator;

    public function __construct(ResponseHelper $responseHelper, PaymentsRepository $repository, ResponseFabricator $responseFabricator)
    {
        $this->responseHelper = $responseHelper;
        $this->repository = $repository;
        $this->responseFabricator = $responseFabricator;
    }

    public function getPayments()
    {
        $paymentsData = $this->repository->findAll();
        $parseredData = PaymentsParser::payments($paymentsData);

        $this->responseFabricator->makeResponse(
            $this->responseHelper,
            true,
            200,
            '',
            $parseredData
        );
        $this->setReponse($this->responseHelper);

        return $this->getReponse();
    }

    public function getPayment()
    {
        $paymentsData = $this->repository->findAll();
        $parseredData = PaymentsParser::payments($paymentsData);

        $this->responseHelper->setSuccess(true);
        $this->responseHelper->setCode(200);
        $this->responseHelper->setMessage();
        $this->responseHelper->setData($parseredData);

        $this->setReponse($this->responseHelper);

        return $this->getReponse();
    }
}
