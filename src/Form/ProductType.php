<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Choice;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit', TextType::class, [
                "label" => "Nom du produit",
                "attr" => [
                    "placeholder" => "Produit",
                    "required" => true
                ]
            ])
            ->add('categorie', ChoiceType::class, [
                "label" => "Nom de la catégorie",
                "choices" => [
                    "CHARCUTERIE" => "CHARCUTERIE",
                    "FROMAGE" => "FROMAGE" ,
                    "FRUITS" => "FRUITS",
                    "DIPS" => "DIPS",
                    "LEGUMES" => "LEGUMES",
                    "FRUITS SECS" => "FRUITS SECS",
                    "TOPPING" => "TOPPING",
                    "PAIN" => "PAIN",
                    "EPICERIE" => "EPICERIE",

                ]
            ])
            ->add('marque', TextType::class, [
                "label" => "Nom de la marque",
                "attr" => [
                    "placeholder" => "Marque",
                    "required" => true
                ]
            ])
            ->add('fournisseur', TextType::class, [
                "label" => "Nom du fournisseur",
                "attr" => [
                    "placeholder" => "Fournisseur",
                    "required" => true
                ]
            ])
            ->add('conditionnement', TextType::class, [
                "label" => "Conditionnement",
                "attr" => [
                    "placeholder" => "Conditionnement",
                    "required" => true
                ]
            ])
            ->add('pahtunit',  TextType::class, [
                "label" => "PA HT Unit",
                "attr" => [
                    "placeholder" => "PA HT Unit",
                    "required" => true
                ]
            ])
            ->add('pahtkg',  TextType::class, [
                "label" => "PA HT Kg",
                "attr" => [
                    "placeholder" => "PA HT Kg",
                    "required" => true
                ]
            ])
            ->add('pattcunit',  TextType::class, [
                "label" => "PA TTC Unit",
                "attr" => [
                    "placeholder" => "PA TTC Unit",
                    "required" => true
                ]
            ])
            ->add('pattckg',  TextType::class, [
                "label" => "PA TTC Kg",
                "attr" => [
                    "placeholder" => "PA TTC Kg",
                    "required" => true
                ]
            ])
            ->add('grammes', IntegerType::class, [
                "label" => "Grammes",
                "attr" => [
                    "placeholder" => "Grammes",
                    "required" => true,
                    "min_length" => 1
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
