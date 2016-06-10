<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 10.04.2016
 * Time: 10:00
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostmanController extends FOSRestController
{
    public function getPostmenAction($id)
    {
        return $this->getDoctrine()->getRepository('AppBundle:Postman')
            ->find($id);
    }

    public function getPostmensAction()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Postman')
            ->findAll();
    }

    public function postPostmenAction(Request $request)
    {
        try {
            $newPostman = $this->container->get('app.postman_form.handler')
                ->post(
                    $request->request->all()
                );
            $routeOptions = array(
                'id' => $newPostman->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView('api_1_get_postmen', $routeOptions,
                Response::HTTP_CREATED);
        } catch (InvalidFormException $exception) {
            return array('form' => $exception->getForm());
        }
    }

    public function putPostmenAction(Request $request, $id)
    {
        try {
            $postman = $this->getDoctrine()->getRepository('AppBundle:Postman')
                ->find($id);
            if (!$postman) {
                $statusCode = Response::HTTP_CREATED;
                $postman = $this->container->get('app.postman_form.handler')
                    ->post(
                        $request->request->all()
                    );
            } else {
                $statusCode = Response::HTTP_NO_CONTENT;
                $postman = $this->container
                    ->get('app.postman_form.handler')
                    ->put(
                        $postman,
                        $request->request->all()
                    );
            }
            $routeOptions = array(
                'id' => $postman->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView(
                'api_1_get_postmen',
                $routeOptions,
                $statusCode
            );
        } catch (InvalidFormException $exception) {
            return $exception->getForm();
        }
    }

    public function deletePostmenAction(Request $request, $id)
    {
        $postman = $this->getDoctrine()
            ->getRepository('AppBundle:Postman')->find($id);
        if ($postman)
        {
            $this->getDoctrine()
                ->getRepository('AppBundle:Postman')->delete($postman);
        }
        else
        {
            throw new NotFoundHttpException(
                sprintf('The resource \'%s\' was not found.', $id)
            );
        }
    }
}