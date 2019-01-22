<?php

declare(strict_types=1);

namespace Prugala\SyliusAllegroPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

final class ConfigurationController extends Controller
{
    /**
     * @param string|null $name
     *
     * @return Response
     */
    public function indexAction(?string $name): Response
    {
        $form = $this->createFormBuilder()
            ->add('appId', TextType::class)
            ->add('appSecret', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'save'))
            ->getForm();

        return $this->render('@PrugalaSyliusAllegroPlugin/configuration_index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
