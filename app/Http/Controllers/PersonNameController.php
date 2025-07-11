<?php

namespace App\Http\Controllers;

use HosmelQ\NameOfPerson\PersonName;

class PersonNameController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $firstName = __('Iori');
		$lastName = __('Kitahara');
        $name = new PersonName($firstName, $lastName);
        $fullName = preg_match('/^[\s\p{L}]+$/', $firstName . $lastName) ? $name->full() : $lastName . $firstName;
        echo __('First name of :full_name: ', ['full_name' => $fullName]) . $name->first . PHP_EOL;
        echo __('Last name of :full_name: ', ['full_name' => $fullName]) . $name->last . PHP_EOL;
    }
}
