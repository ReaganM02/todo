<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
require_once get_template_directory() . '/includes/todo.php';
?>

<?php get_header();?>
  <main class="main-content">
    <div class="todo-items">
      <?php require_once get_template_directory() . '/templates/form.php'  ?>
      <?php require_once get_template_directory() . '/templates/list.php'  ?>
    </div>
  </main>
<?php get_footer(); ?>