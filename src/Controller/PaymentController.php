<?php

namespace App\Controller;

use App\Service\Stripe\Stripe;
use App\Service\Request\PostRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * PaymentController
 *
 * Informations :
 * Contains payment actions
 *
 * @author Sébastien : sebastien.maillot@coding-academy.fr
 */
class PaymentController extends AbstractController
{
    /**
     * @Route("/api/create-payment", name="payment-create", methods={"POST"})
     *
     * Informations :
     * Create the paymentIntent object to charge when payment form is initialized
     */
    public function create(Request $request, PostRequest $postRequest, Stripe $stripe): JsonResponse
    {
        $data = $postRequest->getData($request);
        // $amount = $calculator->getTotalCost($data);
        $amount = $data->get('amount');
        return new JsonResponse( $stripe->getClientSecret($amount) );
    }
}
