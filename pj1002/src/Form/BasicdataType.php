<?php

namespace App\Form;

use App\Entity\Usertable20;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasicdataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Username')
            ->add('Useremailid')
            ->add('Usernumber')
            ->add('Userfathername',TextType::class,['mapped'=>false])
            ->add('Usermothername',TextType::class,['mapped'=>false])
            ->add('Userskill',TextType::class,['mapped'=>false])
            ->add('Userrole',TextType::class,['mapped'=>false])
            ->add('Userexp',TextType::class,['mapped'=>false])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable20::class,
        ]);
    }
}
