<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PdfConversionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pdfFile', FileType::class, [
                'label' => 'Fichier PDF à convertir',
            ])
            ->add('convert', SubmitType::class, [
                'label' => 'Convertir',
            ]);
    }
}

