<?php

namespace App\Form;

use App\Entity\Studentdepartment;
use App\Entity\Usertable26;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class BasicdataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('studentname',TextType::class,[
                'constraints'=>[new Length(['min'=>'3','max'=>'12','minMessage'=>'your name should have at least {{ limit }}','maxMessage'=>'your name cannot be longer than {{ limit }}'])]
            ])
            ->add('Studentmailid',TextType::class,[
                'constraints'=>[new Regex([
                'pattern'=>'/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/',
                'match'=>false,
                'message'=>'not correct {{ label }}'
                ])],'mapped'=>false,'required'=>false
            ])
            ->add('Studentphonenumber',TextType::class,[
                'constraints'=>[new Length([
                    'min'=>'10',
                    'max'=>'12',
                    'minMessage'=>'your number should have atleast {{ limit }}',
                    'maxMessage'=>'your number should contain only {{ limit }} '
                ])]
            ])
            ->add('studentdepartment',EntityType::class,[
                'mapped'=>false,
                'class'=>Studentdepartment::class,
                'choice_label'=>'Studentdepname',
                'query_builder'=>function(EntityRepository $entityRepository)
                {
                    return $entityRepository->createQueryBuilder('d')
                    ->andWhere('d.Studentdepstatus = 1');
                }

            ])
            ->add('submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usertable26::class,
        ]);
    }
}
