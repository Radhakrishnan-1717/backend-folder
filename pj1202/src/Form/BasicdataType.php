<?php

namespace App\Form;

use App\Entity\Userdepartment;
use App\Entity\Usertable22;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasicdataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Username')
            ->add('Usermailid')
            ->add('Usernumber')
            ->add('Department',EntityType::class,[
                'class'=>Userdepartment::class,
                'mapped'=>false,
                'choice_label'=>'Userdepartmenttitle'
            ])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable22::class,
        ]);
    }
}
