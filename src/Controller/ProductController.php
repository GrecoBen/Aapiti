<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
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

     /**
     * @Route("/product/{id}", name="app_product_show", requirements={"id"="\d+"})
     * Homepage, display the selected comics
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/product/add", name="app_product_add")
     * Display the form to add a new product
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();
            $this->addFlash("success", "Produit ajouté avec succès!");
            return $this->redirectToRoute('app_product');
        } elseif ($form->isSubmitted()) {
            $this->addFlash("danger", "L'ajout du produit a échoué!");
        }

        return $this->renderForm("product/form.html.twig", [
            "form" => $form
        ]);
    }
}
