<?php

namespace App\Form;

use App\Entity\Usertable19;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('Userphonenumber')
            ->add('Userfathername',TextType::class,['mapped'=>false])
            ->add('Usermothername',TextType::class,['mapped'=>false])
            ->add('Userexp',TextType::class,['label'=>'enter exp','mapped'=>false])
            ->add('Userskill',TextType::class,['label'=>'enter skill','mapped'=>false])
            ->add('Userrole',TextType::class,['label'=>'enter role','mapped'=>false])
            ->add('Usercountry',TextType::class,['label'=>'enter country','mapped'=>false])
            ->add('Userstate',TextType::class,['label'=>'enter state','mapped'=>false])
            ->add('Usercity',TextType::class,['label'=>'enter city','mapped'=>false])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable19::class,
        ]);
    }
}
