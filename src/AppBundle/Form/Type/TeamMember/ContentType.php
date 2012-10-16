<?php 
namespace AppBundle\Form\Type\TeamMember;

use Neutron\Plugin\TeamMemberBundle\Form\Type\TeamMember\ContentType as BaseType;

use Symfony\Component\Form\FormInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;

class ContentType extends BaseType  
{
    
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $this->allowedRoles = array('ROLE_SUPER_ADMIN', 'ROLE_ADMIN');
        
        parent::buildForm($builder, $options);
        
        $builder
            ->add('github', 'text', array(
                'label' => 'form.github',
                'translation_domain' => 'AppBundle'
            ))
            ->add('enableGithub', 'checkbox', array(
                'label' => 'form.enableGithub', 
                'value' => 1,
                'required' => false,
                'attr' => array('class' => 'uniform'),
                'translation_domain' => 'AppBundle'
            ))
            ->add('twitter', 'text', array(
                'label' => 'form.twitter',
                'translation_domain' => 'AppBundle'
            ))
            ->add('enableTwitter', 'checkbox', array(
                'label' => 'form.enableTwitter', 
                'value' => 1,
                'required' => false,
                'attr' => array('class' => 'uniform'),
                'translation_domain' => 'AppBundle'
            ))
            ->add('image', 'neutron_image_upload', array(
               'label' => 'form.image',
               'required' => false,
               'data_class' => 'AppBundle\Entity\TeamMemberImage',
               'translation_domain' => 'AppBundle',
               'configs' => array(
                   'minWidth' => '140',
                   'minHeight' => '105',
                   'extensions' => 'jpeg,jpg',
                   'maxSize' => '2M',
               ),
            ))
        ;      
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        
        $resolver->replaceDefaults(array(
            'validation_groups' => function(FormInterface $form){
                $validationGroups = array('default');
                
                if ($form->getData()->getEnablePhone() === true){
                    array_push($validationGroups, 'phone_enabled');
                }
                
                if ($form->getData()->getEnableEmail() === true){
                    array_push($validationGroups, 'email_enabled');
                }
                
                if ($form->getData()->getEnableGithub() === true){
                    array_push($validationGroups, 'github_enabled');
                }
                
                if ($form->getData()->getEnableTwitter() === true){
                    array_push($validationGroups, 'twitter_enabled');
                }

                return $validationGroups;
            })
        );
    }

    public function getName()
    {
        return 'app_team_member_content';
    }
    
}