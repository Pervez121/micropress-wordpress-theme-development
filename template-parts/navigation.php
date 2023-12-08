
<?php

/*
Template Name: navigation
*/
                                
                                $menu_items = wp_get_nav_menu_items('main-menu');
                                foreach ($menu_items as $nav_items){
                                    $nav_item_class = '';
                                    if($nav_items->current){
                                        $nav_item_class .= 'active'; 
                                    }
                                    echo '<li class="nav-item'. esc_attr($nav_item_class).'" ><a  class="nav-link"  href="'.$nav_items->url.'">'.$nav_items->title.'</a></li>';
                                }
                        ?>