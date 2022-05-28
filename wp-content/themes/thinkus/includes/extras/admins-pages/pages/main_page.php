<?php

function thinkus_settings_main_page(){
    $config ='thinkus_footer_config';
    $security = wp_create_nonce($config);
    $action = $config;
    $footer_config_info = unserialize(get_option('footer_config'));
    $is_hide_footer = $footer_config_info[3];
    $is_checked = $footer_config_info[3] =='true'? 'checked': '';
    $footer_template_id = $footer_config_info[1];
  
    ?>
    <div class="thinkus__admin__container row pb-6 pt-6">
        <div class="thinkus__admin__container__header col-12">
            <h1 class="text-center">Configuraciones Thinkus</h1>
        </div>
        <div class="thinkus__admin__container__body">
            <div class="thinkus__admin__container__body__content">
                <div class="thinkus__admin__container__body__content__item">
                    <h2 class="text-center display-2">Sección del footer</h2>
                    <p class="text-center">
                        Crea tu footer desde elementor PRO y copia el id del template ([elementor-template id="<a href="<?php admin_url( 'edit.php?post_type=elementor_library&tabs_group=library' )?>"><u>71</u></a>"]) en el campo de texto de abajo.
                    </p>
                    <form action="" id="footer-form" method="post">
                        <input type="hidden" name="security" id="security"  value="<?php echo  $security; ?>">
                        <input type="hidden" name="action" id="action" value="<?php echo   $action; ?>">
                        
                        <div class="form-group row justify-content-center" style="margin-bottom:2em;">
                            <div class="col-4">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" 
                                    style="display:block;margin-bottom:8px;text-align:center;font-weight:700;"  
                                    for="displayfooter">
                                        Ocultar footer copyright
                                    </label>
                                    <div class="d-flex justify-content-center">
                                        <input class="form-check-input" 
                                            type="checkbox"  
                                            role="switch"
                                            <?php
                                           echo $is_checked;
                                            ?> 
                                            id="displayfooter">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <label class="" for="footer_template_id">
                                    <span style="display:block;margin-bottom:5px;text-align:center;font-weight:700;">
                                        ID del template
                                    </span>
                                    <input type="text" class="form-control " 
                                    id="footer_template_id" 
                                    name="footer_template_id" 
                                    placeholder=" ejemplo: 71" 
                                    value="<?php echo $footer_template_id; ?>">
                                </label>
                            </div>
                        </div>
                    <?php submit_button( 'Guardar footer', 'button button-primary margin-auto', 'save_footer', true, null ); ?>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    <?php
}
if (!function_exists('thinkus_footer_config')) {
    function thinkus_footer_config(){
        if(isset($_POST['security']) && wp_verify_nonce($_POST['security'], 'thinkus_footer_config')){
            if(isset($_POST['action']) && $_POST['action']=='thinkus_footer_config'){
                $footer_data = serialize(array(
                    'footer_template_id', $_POST['footer_template_id'],
                    'display_footer', $_POST['displayfooter']
                  ));
              $update =  update_option('footer_config',$footer_data);
            }
        }
        wp_send_json_success($update,200);
    }
    add_action('wp_ajax_thinkus_footer_config', 'thinkus_footer_config');
    add_action('wp_ajax_nopriv_thinkus_footer_config', 'thinkus_footer_config');
}