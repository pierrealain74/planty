<?php
// Créer la classe de widget
class Compteur_Widget extends \Elementor\Widget_Base {

    // Nom de la fonction qui apparaîtra dans l'éditeur Elementor
    public function get_name() {
        return 'compteur';
    }

    // Titre qui apparaîtra dans l'éditeur Elementor
    public function get_title() {
        return 'Compteur';
    }

    // Catégorie dans laquelle apparaîtra le widget
    public function get_categories() {
        return [ 'general' ];
    }

    // Le code HTML qui sera affiché dans l'éditeur Elementor
    protected function _content_template() {
        ?>
        <form id="compteur-form" action="">
          <label for="{{{ settings.counter_id }}}">Compteur:</label>
          <input type="number" id="{{{ settings.counter_id }}}" name="{{{ settings.counter_name }}}" value="{{{ settings.default_value }}}">
          <button type="button" class="compteur-plus">+</button>
          <button type="button" class="compteur-moins">-</button>
          <button type="submit">Envoyer</button>
        </form>
        <?php
    }
}
// Enregistrer le widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Compteur_Widget() );
