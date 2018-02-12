<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package majolika
 */

?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= get_stylesheet_directory_uri(); ?>/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Handelbars Templating Engine -->
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/handlebars-v4.0.5.js"></script>

    <!-- MajlikaSite JavaScript -->
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <!-- Handlebars Templates -->
    <script id="modal-template" type="text/x-handlebars-template">
      <!-- Modal -->
      <div class="modal fade" id="{{modal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Zatvoriť okno"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{modal_title}}</h4>
            </div>
            <div class="modal-body">
              {{{modal_body}}}
            </div>
          </div>
        </div>
      </div>
    </script>
  </body>
</html>