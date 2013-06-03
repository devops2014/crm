<?php
namespace OroCRM\Bundle\ContactBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactSelectType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'configs' => array(
                    'placeholder' => 'Choose a contact...',
                    'datasource' => 'grid',
                    'route' => 'orocrm_contact_index',
                    'grid' => array(
                        'name' => 'contact',
                        'property' => 'first_name'
                    )
                ),
                'autocompleter_alias' => 'test2',
                'class' => 'OroCRMContactBundle:Contact'
            )
        );
    }

    public function getParent()
    {
        return 'oro_jqueryselect2_hidden';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'orocrm_contact_select';
    }
}
