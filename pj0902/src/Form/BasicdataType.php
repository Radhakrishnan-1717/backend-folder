<?php

namespace App\Form;

use App\Entity\Usertable17;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasicdataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customername',TextType::class,['label'=>'Enter name','attr'=>['class'=>'new-form']])
            ->add('customerage',TextType::class,['label'=>'Enter age','attr'=>['class'=>'new-form']])
            ->add('customerphonenumber',TextType::class,['label'=>'Enter number','attr'=>['class'=>'new-form']])
            ->add('terms',CheckboxType::class,['label'=>'accept terms and conditions','mapped'=>false])
            ->add('select',ChoiceType::class,['mapped'=>false,'choices'=>['maybe'=>null,'yes'=>true,'no'=>false],'required'=>true,'attr'=>['class'=>'new-form']])
            ->add('Submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable17::class,
        ]);
    }
}
