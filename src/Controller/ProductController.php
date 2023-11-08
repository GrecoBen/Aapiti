<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use PhpOffice\PhpSpreadsheet\IOFactory;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="app_product")
     */
    public function index(ProductRepository $productRepository, Request $request): Response
    {
        $allProduct = $productRepository -> findAll($request->get("search")); 

        return $this->render('product/list.html.twig', [
            'allProduct' => $allProduct
        ]);
    }   
}
