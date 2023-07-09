<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Sales\Communication\Controller;

use Generated\Shared\Transfer\CommentTransfer;
use Spryker\Service\UtilText\Model\Url\Url;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Spryker\Zed\Sales\SalesConfig;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Spryker\Zed\Sales\Communication\SalesCommunicationFactory getFactory()
 * @method \Spryker\Zed\Sales\Business\SalesFacadeInterface getFacade()
 * @method \Spryker\Zed\Sales\Persistence\SalesQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\Sales\Persistence\SalesRepositoryInterface getRepository()
 */
class CommentController extends AbstractController
{
    /**
     * @uses \Spryker\Zed\Sales\Communication\Controller\DetailController::indexAction()
     *
     * @var string
     */
    protected const ROUTE_REDIRECT = '/sales/detail';

    /**
     * @uses \Spryker\Zed\Sales\Communication\Controller\DetailController::PARAM_ID_SALES_ORDER
     *
     * @var string
     */
    protected const PARAM_ID_SALES_ORDER = 'id-sales-order';

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|array
     */
    public function addAction(Request $request)
    {
        $idSalesOrder = $request->query->getInt(SalesConfig::PARAM_ID_SALES_ORDER);

        $formDataProvider = $this->getFactory()->createCommentFormDataProvider();
        $form = $this->getFactory()->getCommentForm(
            $formDataProvider->getData($idSalesOrder),
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->submitCommentForm($request, $form);
        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function listAction(Request $request)
    {
        $idSalesOrder = $request->query->getInt(SalesConfig::PARAM_ID_SALES_ORDER);

        $comments = $this->getFacade()->getOrderCommentsByIdSalesOrder($idSalesOrder);

        return [
            'comments' => $comments->getComments(),
        ];
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Symfony\Component\Form\FormInterface $form
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|null
     */
    protected function submitCommentForm(Request $request, FormInterface $form)
    {
        $formData = $form->getData();
        $idSalesOrder = $formData[CommentTransfer::FK_SALES_ORDER];

        $commentTransfer = new CommentTransfer();
        $commentTransfer->setMessage($formData[CommentTransfer::MESSAGE]);
        $commentTransfer->setFkSalesOrder($idSalesOrder);

        $currentUserTransfer = $this->getFactory()->getUserFacade()->getCurrentUser();

        $commentTransfer->setUsername(
            $currentUserTransfer->getFirstName() . ' ' . $currentUserTransfer->getLastName(),
        );

        $this->getFacade()->saveComment($commentTransfer);

        $this->addSuccessMessage('Comment successfully added');

        return $this->redirectResponse(
            Url::generate(static::ROUTE_REDIRECT, [
                static::PARAM_ID_SALES_ORDER => $idSalesOrder,
            ]),
        );
    }
}
