<?php

require __DIR__ . "/vendor/autoload.php";

// HAVE NOT DONE - NEED TO FINISH!!!!

class Recipe
{
    private $name;


    public function __construct($name)
    {
        $this->name = $name;

    }



}


class Ingredient
{
    private $ingredient;
    private $notes = [];

    public function __construct($ingredient, $notes)
    {
        $this->ingredient = $ingredient;
        $this->notes = $notes;
    }

}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
// using echo so it looks nicer
echo $cake->display();
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
dump($cake->vegan()); // false