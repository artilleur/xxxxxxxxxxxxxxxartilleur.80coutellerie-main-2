<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;

use function Symfony\Component\Translation\t;

use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
// use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Form\{FormBuilderInterface, FormEvent, FormEvents};
use Symfony\Component\Form\Extension\Core\Type\{ChoiceType, PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Field\{ChoiceField, IdField, EmailField, TextField};

 //class UtilisateurCrudController extends AbstractCrudController
// {
//     public static function getEntityFqcn(): string
//     {
//         return Utilisateur::class;
//     }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    class UtilisateurCrudController extends AbstractCrudController
{
    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ) {}
    
    public static function getEntityFqcn(): string
    {
        return Utilisateur::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_EDIT, Action::INDEX)
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DETAIL)
            ;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            EmailField::new('email'),
            TextField::new('password')
             ->setFormType(RepeatedType::class)
             ->setFormTypeOptions([
                 'type' => PasswordType::class,
                 'first_options' => ['label' => 'Password'],
                 'second_options' => ['label' => '(Repeat)'],
                 'mapped' => false,
             ])
             ->setRequired($pageName === Crud::PAGE_NEW)
             ->onlyOnForms(),
            TextField:: new('nom'),
            TextField:: new('prenom'),
            TextField:: new('adresse'),
            TextField:: new('cp'),
            TextField:: new('ville'),
            TextField:: new('pays'),
            TextField:: new('telephone'),
            ChoiceField:: new('roles', 'roles') ->renderExpanded(true)
           ->allowMultipleChoices()
           ->setChoices([
                 'Commerce' => 'ROLE_COMMERCE',
                   'Utilisateur' => 'ROLE_USER',
                      'Commercial' => 'ROLE_COMMERCIAL',
                     'Administrateur' => 'ROLE_ADMIN'
             ]), 
             
            
            
        ];
    

        

        // $password = TextField::new('password')
        //     ->setFormType(RepeatedType::class)
        //     ->setFormTypeOptions([
        //         'type' => PasswordType::class,
        //         'first_options' => ['label' => 'Password'],
        //         'second_options' => ['label' => '(Repeat)'],
        //         'mapped' => false,
        //     ])
        //     ->setRequired($pageName === Crud::PAGE_NEW)
        //     ->onlyOnForms()
        //     ;
        // $fields[] = $password;

        // return $fields;
    }

    public function createNewFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    public function createEditFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    private function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface
    {
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());
    }

    private function hashPassword() {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }

            $hash = $this->userPasswordHasher->hashPassword($this->getUser(), $password);
            $form->getData()->setPassword($hash);
        };
    }

    public function configureFormFields(FormBuilderInterface $formBuilder): void {
        $formBuilder
            ->add('role', ChoiceType::class, [
                'choices' => [
                    
                    'Commerce' => 'ROLE_COMMERCE',
                    'Utilisateur' => 'ROLE_USER',
                    'Commercial' => 'ROLE_COMMERCIAL',
                    'Administrateur' => 'ROLE_ADMIN'
                ],
                
            ]);
    }
}


