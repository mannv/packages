<?php
/**
 * Created by PhpStorm.
 * User: anhmantk
 * Date: 3/29/19
 * Time: 12:03 AM
 */

namespace Manvn\BootstrapForm\Builder;


class BTMandatoryBuilder
{
    /**
     * @param $abstractRequest
     * @return array
     */
    public function mandatory($abstractRequest)
    {
        $validate = new $abstractRequest;
        $rules = $validate->rules();
        if (empty($rules)) {
            return [];
        }

        $response = [];
        foreach ($rules as $name => $rule) {
            $listRule = $rule;
            if (is_string($rule)) {
                $listRule = explode('|', $rule);
            }
            if (in_array('required', $listRule)) {
                $response[$name] = true;
            }
        }
        return $response;
    }
}