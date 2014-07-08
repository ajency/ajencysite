<?php
/**
 * Ajency Team Widget Class
 */
class ajency_teamwidget_widget extends WP_Widget {

    /** constructor */
    function ajency_teamwidget_widget() {
        parent::WP_Widget(false, $name = 'Ajency Team Widget');
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {
        extract( $args );
		    global $wpdb;

        $title = apply_filters('widget_title', $instance['title']); 

        ?>
              <?php echo $before_widget; ?>
                <div class="Center-Block column-8 scroll-indicator-container" id="scr6">
                  <h3 class="grid-title non-bdr">&nbsp;</h3>
                  <div class="col-3">
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/16.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">My lines ends in semicolon ;</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/13.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Code Slinger</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/14.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-1">
                     <div class="mobile-hidden">
                        <div class="square-tile aj-live-tile square-tile-mobile5">
                           <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                              <div>
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/2.jpg" class="is-reponsive">
                              </div>
                              <div>
                                 <div>
                                    <span class="metroLarge bottom">Jock Of Code</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="square-tile aj-live-tile square-tile-mobile5">
                           <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                              <div>
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/19.jpg" class="is-reponsive">
                              </div>
                              <div>
                                 <div>
                                    <span class="metroLarge bottom"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="double-tile aj-live-tile double-tile-mobile">
                        <div id="item5" class=" live-tile" data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div class="yellow">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/3.jpg" class="is-reponsive">
                           </div>
                           <div class="yellow bottom-txt">
                              <h1>&#60; insert fancy title here &#62;</h1>
                              <p>Connect on <a href="http://www.linkedin.com/in/anujkhurana">Linkedin</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="mobile-visible">
                        <div class="square-tile aj-live-tile square-tile-mobile5">
                           <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                              <div>
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/2.jpg" class="is-reponsive">
                              </div>
                              <div>
                                 <div>
                                    <span class="metroLarge bottom">Jock Of Code</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="square-tile aj-live-tile square-tile-mobile5">
                           <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                              <div>
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/19.jpg" class="is-reponsive">
                              </div>
                              <div>
                                 <div>
                                    <span class="metroLarge bottom"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/1.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Mouse Artist</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/7.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/12.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Dynamic Model</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-1">
                     <div class="double-tile aj-live-tile double-tile-mobile">
                        <div id="item5" class=" live-tile" data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div class="yellow">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/4.jpg" class="is-reponsive">
                           </div>
                           <div class="yellow bottom-txt">
                              <h1>&#60; insert co-fancy title here &#62;</h1>
                              <p>Connect on <a href="http://www.linkedin.com/in/avantihiremath">Linkedin</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/6.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/15.jpg"class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom"> </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/10.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Responsive Rebel</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/18.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">User Friendly Minion</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div  id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/9.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Designosaur</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/17.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/ateam.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div  id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/8.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="square-tile aj-live-tile square-tile-mobile5">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/5.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/team/11.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="square-tile aj-live-tile square-tile-mobile5 ">
                        <div  id="item5" class="live-tile " data-delay="1000" data-play-onhover="true" data-start-now="false" data-repeat="0" data-bounce="true" data-direction="vertical">
                           <div>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/no-image.jpg" class="is-reponsive">
                           </div>
                           <div>
                              <div>
                                 <span class="metroLarge bottom">Who's Next ?</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
              <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {	

        $title = esc_attr($instance['title']);

        ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>

        <?php
    }

} // class 
add_action('widgets_init', create_function('', 'return register_widget("ajency_teamwidget_widget");'));