<?php

namespace App\Controller;

use App\Entity\CircleDiameter;
use App\Entity\TriangleSurface;
use App\Form\Type\CircleDiameterType;
use App\Form\Type\TriangleSurfaceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request): Response
    {

        $triangle = new TriangleSurface();
        // creates a triangle object and initializes some data for this example
        $triangle->setBase(0);
        $triangle->setHeight(0);
        $result1 = 0;
        $result2 = 0;

        $form_triangle = $this->createFormBuilder($triangle)
            ->add('base', NumberType::class)
            ->add('height', NumberType::class)
            ->add('calculate', SubmitType::class, ['label' => 'Calculate Surface'])
            ->getForm();

        $form_triangle = $this->createForm(TriangleSurfaceType::class, $triangle);

        $circle = new CircleDiameter();
        // creates a triangle object and initializes some data for this example
        $circle->setR(0);

        $form_circle = $this->createFormBuilder($circle)
            ->add('r', NumberType::class)
            ->add('calculate', SubmitType::class, ['label' => 'Calculate Diameter'])
            ->getForm();

        $form_circle = $this->createForm(CircleDiameterType::class,$circle);

        $form_circle->handleRequest($request);
        $form_triangle->handleRequest($request);
        if ($form_triangle->isSubmitted() || $form_circle->isSubmitted()) {
            //$triangle_get = $form_triangle->getData();
            //$circle_get = $form_circle->getData();
            $base = $form_triangle->get('base')->getData();
            $height = $form_triangle->get('height')->getData();
            $r = $form_circle->get('r')->getData();
            $result1 = $base*$height/2;
            $result2 = 2*$r;
        }

        return $this->render('home/index.html.twig', [
            'form_triangle' => $form_triangle->createView(),
            'form_circle' => $form_circle->createView(),
            'result_triangle' => $result1,
            'result_circle' => $result2,
        ]);
    }
}
