<?php

namespace App\Form;

use App\Entity\Track;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du morceau',
            ])
            ->add('gameName', TextType::class, [
                'label' => 'Nom du jeu',
            ])
            ->add('composer', TextType::class, [
                'label' => 'Compositeur',
                'required' => false,
                'help' => 'Facultatif : laissez vide si vous ne connaissez pas le compositeur.',
            ])
            ->add('youtubeUrl', UrlType::class, [
                'label' => 'Lien YouTube',
                'default_protocol' => 'https',
                'help' => 'Exemple : https://www.youtube.com/watch?v=XXXXXXXXXXX',
            ])
            ->add('submit', SubmitType::class, [
                'label' => $options['submit_label'],
                'attr' => ['class' => 'btn'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Track::class,
            'submit_label' => 'Enregistrer',
        ]);
        $resolver->setAllowedTypes('submit_label', 'string');
    }
}
