<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PdfConversionType;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/convert', name: 'convert_pdf')]
    public function convertPdfAction(Request $request)
    {
        $form = $this->createForm(PdfConversionType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $pdfFile = $form->get('pdfFile')->getData();
            $pdfFilePath = $pdfFile->getPathname();
            $htmlContent = $this->convertPdfToHtml($pdfFilePath);
    
            return $this->render('home/index.html.twig', [
                'htmlContent' => $htmlContent,
            ]);
        }
    
        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    








}
