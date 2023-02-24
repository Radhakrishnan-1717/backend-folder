<?php

namespace App\Form;

use App\Entity\Usertable18;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasicdataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',TextType::class,['label'=>'entername','attr'=>['class'=>'new-form']])
            ->add('usernumber',TextType::class,['label'=>'enternumber','attr'=>['class'=>'new-form']])
            ->add('userphoto', FileType::class,['label'=>'upload file','mapped'=>false,'attr'=>['class'=>'new-form']])
            ->add('submit',SubmitType::class,['attr'=>['class'=>'new-form']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable18::class,
        ]);
    }
}
