<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\DecimalType;




class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit', TextType::class, [
                "label" => "Nom du produit",
                "attr" => [
                    "placeholder" => "Produit"
                ]
            ])
            ->add('categorie', TextType::class, [
                "label" => "Nom de la catégorie",
                "attr" => [
                    "placeholder" => "Catégorie"
                ]
            ])
            ->add('marque', TextType::class, [
                "label" => "Nom de la marque",
                "attr" => [
                    "placeholder" => "Marque"
                ]
            ])
            ->add('fournisseur', TextType::class, [
                "label" => "Nom du fournisseur",
                "attr" => [
                    "placeholder" => "Fournisseur"
                ]
            ])
            ->add('conditionnement', TextType::class, [
                "label" => "Conditionnement",
                "attr" => [
                    "placeholder" => "Conditionnement"
                ]
            ])
            ->add('pahtunit',  TextType::class, [
                "label" => "PA HT Unit",
                "attr" => [
                    "placeholder" => "PA HT Unit"
                ]
            ])
            ->add('pahtkg',  TextType::class, [
                "label" => "PA HT Kg",
                "attr" => [
                    "placeholder" => "PA HT Kg"
                ]
            ])
            ->add('pattcunit',  TextType::class, [
                "label" => "PA TTC Unit",
                "attr" => [
                    "placeholder" => "PA TTC Unit"
                ]
            ])
            ->add('pattckg',  TextType::class, [
                "label" => "PA TTC Kg",
                "attr" => [
                    "placeholder" => "PA TTC Kg"
                ]
            ])
            ->add('grammes', IntegerType::class, [
                "label" => "Grammes",
                "attr" => [
                    "placeholder" => "Grammes"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
