<?php
// how to check if data has been sent to use via Get method
$title = $email = $ingredient = ''; 
$errors = array('email' => '', 'title' => '', 'ingredient' => '');

if (isset($_POST['submit'])) {

    if (empty($_POST['email'])) {
        $errors['email'] = 'email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email address';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = "Title is requird <br />";
    } else {
        $title = $_POST['title'];
        if (!filter_var(preg_match('/^[a-zA-Z\s]+$/', $title))) {
            $errors['title'] = 'Title must be Letters and Spaces only';
        }
    }
    if (empty($_POST['ingredient'])) {
        $errors['ingredient'] = 'Ingredient is required';
    } else {
        $ingredient = $_POST['ingredient'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)) {
            $errors['ingredient'] = " Ingredient must be a comma separated list";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./projectTutorial/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action='index.php' method='POST'>
        <label for="your email" class=" emailLabel">Your Email</label>
        <input type='text' name='email' value=" <?php echo  htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label for="Pizza titlt">Pizza Title</label>
        <input type='text' name='title'  value=" <?php echo  htmlspecialchars($title); ?> ">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label for="ingredient">Ingredients (comma separated):</label>
        <input type='text' name='ingredient' value=" <?php echo  htmlspecialchars($ingredient) ?> ">
        <div class="red-text"><?php echo $errors['ingredient']; ?></div>
        <div class="center">
            <input type="submit" name='submit' value='submit' class="btn brand z-depth-2">
        </div>
    </form>
    <?php include('./projectTutorial/footer.php')?>

</section>