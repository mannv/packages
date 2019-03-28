<?php
/**
 * Created by PhpStorm.
 * User: anhmantk
 * Date: 3/29/19
 * Time: 12:03 AM
 */

namespace Manvn\BootstrapForm\Builder;

use Collective\Html\FormBuilder;

/**
 * Class FormBuilder
 * @package Manvn\BootstrapForm
 */
class BTFormBuilder extends FormBuilder
{
    public function demo()
    {
        echo '<h1>DEMO</h1>';
    }

    private function formGroup($name, $label, $element)
    {
        return view('btform::form_group', [
            'name' => $name,
            'label' => $label,
            'element' => $element,
        ]);
    }

    private function setDefaultFormClass(&$options)
    {
        if (!isset($options['class'])) {
            $options['class'] = 'form-control';
        } else {
            $options['class'] .= ' form-control';
        }
    }

    private function makeLabel($name, $value, $mandatory = false)
    {
        $required = '';
        if($mandatory) {
            $required = ' <span class="mandatory">*</span>';
        }
        return $this->toHtmlString('<label for="' . $name . '">' . $value . $required . '</label>');
    }

    public function text($name, $textLabel = '', $mandatory = false, $value = null, $options = [])
    {
        $this->setDefaultFormClass($options);

        $label = $this->makeLabel($name, !empty($textLabel) ? $textLabel : $name, $mandatory);
        $text = parent::text($name, $value, $options);
        return $this->formGroup($name, $label, $text);
    }

    public function email($name, $emailLabel = '', $mandatory = false, $value = null, $options = [])
    {
        $this->setDefaultFormClass($options);
        $label = $this->makeLabel($name, !empty($emailLabel) ? $emailLabel : $name, $mandatory);
        $text = parent::email($name, $value, $options);
        return $this->formGroup($name, $label, $text);
    }

    public function submit($value = null, $options = [])
    {
        $options['class'] = 'btn btn-primary';
        return parent::submit($value, $options);
    }
}