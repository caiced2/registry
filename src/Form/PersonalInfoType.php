<?php

namespace App\Form;

use App\Entity\PersonalInformation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('second_name')
            ->add('surname')
            ->add('second_surname')
            ->add('birth_place')
            ->add('birth_date', DateType::class,['widget' => 'single_text'])
            ->add('identification_card',NumberType::class)
            ->add('gender',ChoiceType::class,['choices'  => [
                'Female' => 'Female',
                'Male' => 'Male'
            ]])
            ->add('city_residence')
            ->add('Save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PersonalInformation::class,
        ]);
    }
}
