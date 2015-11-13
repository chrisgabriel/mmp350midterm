<?php
/**
 * Template part for displaying MY posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sample_Theme
 */

?>



    <div class="newHatContainer">
    <div class="newHatTitle"><span class="rainbow">
    <?php
    the_title();
    ?>
    </span></div>
        <div class="new-hat">
        <?php 
        the_content();
        ?>
        </div>
        
        <div class="postInfo">
        By <?php the_author() ?> on 
        <?php the_date( 'F j, Y g:i A' ) ?>
        </div> 
    
    </div>
    <br>

